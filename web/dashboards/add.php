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
 * Brief: This PHP script file contains solution for generating and adding dashboard built up from templates.
 *
 */

Configure and add dashboards using unassigned MVDevices

<?php

include ('dashboard_json.php');
include ('../database/database_wrapper.php');


if (isset($_GET['newDashboard']))
{
  $db2 = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");

  echo "<br><br>NEW DASHBOARD IS ABOUT TO CREATE : " . $_GET['newDashboard'] . "<br>";

  //echo $dashboardTemplate
echo $_GET['newDashboard'];
  
  $patientTextLanguageInvariantObj = array(
   'short_name' => 'patient'
  );
  $patientTextLanguageInvariant = dbw_getTextInLanguage($patientTextLanguageInvariantObj);
echo "1";
  $deviceNumber = (int) filter_var($_GET['newDashboard'], FILTER_SANITIZE_NUMBER_INT);
echo "2";
  if ($deviceNumber != 0)
  {
echo "3";
    $dashboardTemplateModified = str_replace("MVDeviceXXX", "MVDevice" . $deviceNumber, $dashboardTemplate);
    $dashboardTemplateModified = str_replace("PatientXXX", $patientTextLanguageInvariant . " " . $deviceNumber, $dashboardTemplateModified);
    $newDashboardSql = "insert into dashboard (id, configuration, search_text, tenant_id, title) values " .
	"('1ea" . uniqidReal(28) . "', '" . $dashboardTemplateModified . "', 'patient " . $deviceNumber . " dashboard', '1ea7a6340c98100bb94173858911466', 'Patient " . $deviceNumber . " Dashboard');";

echo "4";
    $result = pg_query($db2, $newDashboardSql);
echo "5";
    $cmdtuples = pg_affected_rows($result);
echo "6";
    if ($cmdtuples == "")
    {
      echo '<span style="color: #FFFFFF;background-color:#FF0000;text-align:center;">Cannot create new dashboard. Maybe another one already exists with the same name?</span>';
    }
    else
    {
      echo '<span style="color: #FFFFFF;background-color:#00FF00;text-align:center;">New dashboard has been created!</span>';
    }
  }
  else
  {
    echo "Device name does not contain any number. Nothing to do here...";
  }
echo "7";
  pg_close($db2);
}

$db = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");

$result = pg_query($db, "select count(*) from device where name like 'MVDevice%';");
$numOfUnassignedDevices = pg_fetch_assoc($result)['count'];
echo '<h1>MVDevices available: ' . $numOfUnassignedDevices . '</h1>';
echo 'Checking device integrity...<br><br>';
$i = 0;
while($i < $numOfUnassignedDevices) {
  //$result = pg_query($db, "(select name from device where name like 'MVDevice%' limit 1 offset " . $i . ");");
  $deviceLookupSql = "(select name from device where name like 'MVDevice%' limit 1 offset " . $i . ");";
  $result = pg_query($db, $deviceLookupSql);
  $prefetchedDeviceName = pg_fetch_assoc($result)['name'];
  echo "<br><br>Looking for " . $prefetchedDeviceName . "<br>";
  $selectSql = "select (select name from device where name like 'MVDevice%' limit 1 offset " . $i . ") as lookupname, title, configuration from dashboard where configuration like concat('%', (select name from device where name like 'MVDevice%' limit 1 offset " . $i . "), '%') and title like 'Patient % Dashboard';";
  //echo $selectSql . "<br>";
  $result = pg_query($db, $selectSql);
  $deviceName = pg_fetch_assoc($result)['lookupname'];
  if ($deviceName == "")
  {
    echo '<span style="color: #FFFFFF;background-color:#FF0000;text-align:center;">' . $prefetchedDeviceName . ' is NOT assigned to any dashboard.</span>';
    echo '<input id="btn' . $prefetchedDeviceName . '" type="button" value="Create dashboard and assign device" style="background-color:white" onclick="sendAddNewDashboardRequest(\'' . $prefetchedDeviceName . '\')"/>';
  }
  else
  {
    echo '<span style="color: #FFFFFF;background-color:#00FF00;text-align:center;">' . $prefetchedDeviceName . ' is assigned to a dashboard.</span>';
  }
  $i++;
}

pg_close($db);

//onclick="sendAddNewDashboardRequest(\'' . $prefetchedDeviceName . '\')"/>';
?>

<script>
function sendAddNewDashboardRequest(deviceName)
{
  window.location.replace('http://192.168.0.222/dashboards/add.php?newDashboard=' + deviceName);

}
</script>


