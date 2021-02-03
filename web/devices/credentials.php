/*
 * This file is part of the MassVentil Data Acquisition System V1.0 distribution 
 * http://www.massventil.org
 * 
 * This program is free software: you can redistribute it and/or modify  
 * it under the terms of the GNU General Public License as published by  
 * the Free Software Foundation, version 3.
 *
 * This program is distributed in the hope that it will be useful, but 
 * WITHOUT ANY WARRANTY; without even the implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU 
 * General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License 
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 * For further information contact:
 * 		Author: Roland Dóczi <doczi.roli@gmail.com>
 * 		MassVentil official channel: <http://massventil.org/en/contact/>
 *
 * Date: February 1st, 2021
 *
 * Brief: This PHP script file contains functions to modify device credentials (tokens) to communicate.
 *
 */

<?php

include ('../database/configuration.php');

$db = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");

if(isset($_GET["oldToken"]) && isset($_GET["newToken"]))
{
  echo "Old token to update: " . $_GET["oldToken"] . "<br>";

  echo "Updating..." . "<br>";
  $sql = "update device_credentials set credentials_id = '" . $_GET["newToken"] . "' where credentials_id like '" . $_GET["oldToken"] . "';";

  $delete_result = pg_query($db, $sql);
  if (!$delete_result) 
  {
    $errormessage = pg_last_error();
    echo "Error with query: " . $errormessage;
  } 
  else {
    echo "Update record succeed.";
  }
  echo "<br><br>";
}




$result = pg_query($db, "select device.name, device_credentials.credentials_id from device, device_credentials where device.id = device_credentials.device_id;");

echo '<h1>Credentials</h1>';
echo "<table border=1>";
while($row=pg_fetch_assoc($result))
{
  echo "<tr><td>";
  echo "<p>" . $row['name'] . "<td>" . $row['credentials_id'] . "<td width=\"100px\">";
  echo '<form action="http://192.168.0.222/devices/credentials.php?credentialsID=' . $row['credentials_id'] . ' method="get" id="form' . $row['credentials_id'] . '">';
  echo '<input type="text" id="oldCredentialToken" name="oldToken" value="' . $row['credentials_id'] . '"><br><br>';
  echo '<input type="text" id="newCredentialToken" name="newToken"><br><br>';
  echo '<button type="submit" form="form' . $row['credentials_id'] . '" value="Submit">Submit</button>';
  echo '</form>';
  echo "</td></tr>";
}
echo "</table>";




pg_close($db);
?>

