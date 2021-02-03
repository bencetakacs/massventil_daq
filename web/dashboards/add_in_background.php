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
 * Brief: This PHP script file solves the possibility to generate and add dashboards into the system during runtime.
 *
 */

<?php

include ('dashboard_json.php');
include ('../database/database_wrapper.php');
include ('../database/configuration.php');

function cors() {

    // Allow from any origin
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
        // you want to allow, and if so:
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }

    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            // may also be using PUT, PATCH, HEAD etc
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);
    }

}

cors();



if (isset($_GET['newDashboard']))
{

  $db = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");

  //echo $dashboardTemplate
  
  $patientTextLanguageInvariantObj = array(
   'short_name' => 'patient'
  );
  $patientTextLanguageInvariant = dbw_getTextInLanguage($patientTextLanguageInvariantObj);

  $deviceNumber = (int) filter_var($_GET['newDashboard'], FILTER_SANITIZE_NUMBER_INT);

  if ($deviceNumber != 0)
  {
    $dashboardTemplateModified = str_replace("MVDeviceXXX", "MVDevice" . $deviceNumber, $dashboardTemplate);
    $dashboardTemplateModified = str_replace("PatientXXX", $patientTextLanguageInvariant . " " . $deviceNumber, $dashboardTemplateModified);
    $newDashboardSql = "insert into dashboard (id, configuration, search_text, tenant_id, title) values " .
	"('1ea" . uniqidReal(28) . "', '" . $dashboardTemplateModified . "', 'patient " . $deviceNumber . " dashboard', '1ea7a6340c98100bb94173858911466', 'Patient " . $deviceNumber . " Dashboard');";


    $result = pg_query($db, $newDashboardSql);
    $cmdtuples = pg_affected_rows($result);
    if ($cmdtuples == "")
    {
      echo 'NOK for newDashboard';
    }
    else
    {
      echo 'OK for newDashboard';
    }
  }
  else
  {
    echo "NOK 2 for newDashboard";
  }

  pg_close($db);
  
}

if (isset($_GET['numOfNewDashboards']))
{
echo $_GET['numOfNewDashboards'];
die;
  $db = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");

  //echo "<br><br>NEW DASHBOARD IS ABOUT TO CREATE : " . $_GET['newDashboard'] . "<br>";

  //echo $dashboardTemplate
  
  $patientTextLanguageInvariantObj = array(
   'short_name' => 'patient'
  );
  $patientTextLanguageInvariant = dbw_getTextInLanguage($patientTextLanguageInvariantObj);

  $deviceNumber = (int) filter_var($_GET['numOfNewDashboards'], FILTER_SANITIZE_NUMBER_INT);

  $ret = "";

  if ($deviceNumber != 0)
  {
    $dashboardTemplateModified = str_replace("MVDeviceXXX", "MVDevice" . $deviceNumber, $dashboardTemplate);
    $dashboardTemplateModified = str_replace("PatientXXX", $patientTextLanguageInvariant . " " . $deviceNumber, $dashboardTemplateModified);
    $newDashboardSql = "insert into dashboard (id, configuration, search_text, tenant_id, title) values " .
	"('1ea" . uniqidReal(28) . "', '" . $dashboardTemplateModified . "', 'patient " . $deviceNumber . " dashboard', '1ea7a6340c98100bb94173858911466', 'Patient " . $deviceNumber . " Dashboard');";


    $result = pg_query($db, $newDashboardSql);
    $cmdtuples = pg_affected_rows($result);
    if ($cmdtuples == "")
    {
      $ret = "error1";
    }
    else
    {
      $ret = "ok";
    }
  }
  else
  {
    $ret = "error2";
  }

  pg_close($db);

  echo $ret;
}

?>




