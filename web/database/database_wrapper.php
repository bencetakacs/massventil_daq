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
 * Brief: This PHP script file contains database specific wrappers functions.
 *			It assumes valid database with relations, keys, tables.
 *
 */

<?php

include ('../database/configuration.php');

ini_set('display_errors', 1);
error_reporting(E_ALL|E_STRICT);

function uniqidReal($lenght = 13) {
    if (function_exists("random_bytes")) {
        $bytes = random_bytes(ceil($lenght / 2));
    } elseif (function_exists("openssl_random_pseudo_bytes")) {
        $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
    } else {
        throw new Exception("no cryptographically secure random function available");
    }
    return substr(bin2hex($bytes), 0, $lenght);
}


// TODO: !!! add device_credentials as well !!!
function dbw_addDevice($params)
{
  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $commandStr .= "insert into device (id, additional_info, customer_id, type, name, search_text, tenant_id) values (".uniqidReal(31).", '', '1b21dd2138140008080808080808080', 'default', '".$params['name']."', '', '".strtolower($params['name'])."', '1ea7a6340c98100bb94173858911466');";
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    $ret = "ok";
  }
  // pg_close($dbConnectObj);
  return $ret;
}

function dbw_getListOfDevices($params)
{
  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $commandStr = "select * from device;";
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    $ret = array();
    while ($row = pg_fetch_assoc($dbResult))
    {
      array_push($ret, $row['name']);
    }
  }
  // pg_close($dbConnectObj);
  return $ret;
}

function dbw_getAssignments($params)
{
  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $commandStr = "select * from patients where location_id != '' and device_id != '';";
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    $ret = array();
    while ($row = pg_fetch_assoc($dbResult))
    {
      array_push($ret, array('patient_id' => $row['id'], 'location_id' => $row['location_id'], 'device_id' => $row['device_id']) );
    }
  }
  // pg_close($dbConnectObj);
  return $ret;
}

function dbw_updateAssignments($params)
{
  // 1st: update dashboard entity id
    // get the actual dashboard descriptor
    // replace entityid
    // update dashboard
  // 2nd: update patients table
  // 3nd: add new events
    // location
    // device
  // 4th: execute()

  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $currentTime = time();

  // 1 - get the actual dashboard descriptor
  $removeDashboardSql = "select configuration from dashboard where search_text like 'patient ".$params['location_id']." dashboard';";
  $dbResult = pg_query($dbConnectObj, $removeDashboardSql);
  $row = pg_fetch_assoc($dbResult);
  // 1 - replace entityid
  $row['configuration'] = preg_replace("/\"deviceNameFilter\":\"(.*?)\"/", "\"deviceNameFilter\":\"". $params['device_id']."\"", $row['configuration']);
  // 1 - update dashboard
  $updateDashboardSql = "update dashboard set configuration = '".$row['configuration']."' where search_text like 'patient ".$params['location_id']." dashboard';";

  // 2
  $updatePatientsTableSql = "update patients set location_id='".$params['location_id']."', device_id='".$params['device_id']."' where id like '".$params['patient_id']."';";

  // 3 - location
  $newLocationEventSql = "insert into location_changes (id, new_location_id, patient_id, timestamp) values ((select uuid_generate_v4()), '".$params['location_id']."', '".$params['patient_id']."', ".$currentTime.");";
  // 3 - device
  $newDeviceEventSql = "insert into device_changes (id, new_device_id, patient_id, timestamp) values ((select uuid_generate_v4()), '".$params['device_id']."', '".$params['patient_id']."', ".$currentTime.");";

  // 4
  $commandStr = $updateDashboardSql . $updatePatientsTableSql . $newLocationEventSql . $newDeviceEventSql;
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    $ret = "ok";
  }
  return $ret;
}

function dbw_addPatient($params)
{
  $currentTime = time();
  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  // add to patients
  $commandStr = "insert into patients (id, location_id, device_id, timestamp) values ('" . $params['id'] . "', '" . $params['location_id'] . "', '" . $params['device_id'] . "', '" . $params['timestamp'] . "'); ";
  // add to patient_data
  $commandStr .= "insert into patient_data (patient_id, age, height, weight, gender) values ('" . $params['id'] . "', " . $params['age'] . ", " . $params['height'] . ", " . $params['weight'] . ", '" . $params['gender'] . "'); ";
  // add to location_changes
  $commandStr .= "insert into location_changes (id, new_location_id, patient_id, timestamp) values ((select uuid_generate_v4()), '" . $params['location_id'] . "', '" . $params['id'] . "', '" . $params['timestamp'] . "'); ";
  // add to device_changes
  $commandStr .= "insert into device_changes (id, new_device_id, patient_id, timestamp) values ((select uuid_generate_v4()), '" . $params['device_id'] . "', '" . $params['id'] . "', '" . $params['timestamp'] . "');";

  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    $ret = "ok";
  }
  // pg_close($dbConnectObj);
  return $ret;
}

function dbw_updatePatient($params)
{
  $currentTime = time();
  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  // add to patients
  $commandStr = "update patients set location_id='" . $params['location_id'] . "', device_id='" . $params['device_id'] . "', timestamp='" . $params['timestamp'] . "' where id='" . $params['id'] . "';";
  // add to patient_data
  $commandStr .= "update patient_data set age=" . $params['age'] . ", height=" . $params['height'] . ", weight=" . $params['weight'] . ", gender='" . $params['gender'] . "' where patient_id='" . $params['id'] . "'; ";
  // add to location_changes
  $commandStr .= "insert into location_changes (id, new_location_id, patient_id, timestamp) values ((select uuid_generate_v4()), '" . $params['location_id'] . "', '" . $params['id'] . "', '" . $currentTime . "'); ";
  // add to device_changes
  $commandStr .= "insert into device_changes (id, new_device_id, patient_id, timestamp) values ((select uuid_generate_v4()), '" . $params['device_id'] . "', '" . $params['id'] . "', '" . $currentTime . "');";

  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    $ret = "ok";
  }
  // pg_close($dbConnectObj);
  return $ret;
}

function dbw_modPatientData($params)
{
  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $commandStr = "update patient_data set age = " . $params['age'] . ", height = " . $params['height'] . ", weight = " . $params['weight'] . ", gender = '" . $params['gender'] . "' where patient_id like '" . $params['id'] . "';";
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    $ret = "ok";
  }
  // pg_close($dbConnectObj);
  return $ret;
}

function dbw_newPatientLocation($params)
{
  $currentTime = time();
  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $commandStr .= "insert into location_changes (id, new_location_id, patient_id, timestamp) values ((select uuid_generate_v4()), '" . $params['location_id'] . "', '" . $params['id'] . "', " . $currentTime . "); ";
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    $ret = "ok";
  }
  // pg_close($dbConnectObj);
  return $ret;
}

function dbw_newPatientDevice($params)
{
  $currentTime = time();
  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $commandStr .= "insert into device_changes (id, new_device_id, patient_id, timestamp) values ((select uuid_generate_v4()), '" . $params['device_id'] . "', '" . $params['id'] . "', " . $currentTime . "); ";
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    $ret = "ok";
  }
  // pg_close($dbConnectObj);
  return $ret;
}

// TODO: ask what kind of events could we have
function dbw_addDataEvent($params)
{
  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $commandStr = "";
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    $ret = "ok";
  }
  // pg_close($dbConnectObj);
  return $ret;
}

// https://www.php.net/manual/en/function.json-encode.php
function dbw_addNewControlEvent($params)
{
  $currentTime = time();
  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $commandStr = "insert into control_events (id, parameters, managed_by, timestamp) values ((select uuid_generate_v4()), '".$params['parameters']."', '".$params['user_id']."', ".$currentTime.");";
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    $ret = "ok";
  }
  // pg_close($dbConnectObj);
  return $ret;
}

// TODO:
// edit the following table columns as well:
// - massventil_configuration.number_of_locations
// - location_data.*
// edit the following dashboards as well:
// - patients_summary (call parameterized ../summary/generate_patients_summary.php)
// - 
function dbw_setNumberOfLocations($params)
{
  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $commandStr = "update massventil_configuration set number_of_locations = " . $params['numOfLocations'] . ";";
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    $ret = "ok";
  }
  // pg_close($dbConnectObj);
  return $ret;
}

function dbw_getNumberOfLocations($params)
{
  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $commandStr = "select number_of_locations from massventil_configuration;";
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    $ret = pg_fetch_assoc($dbResult)['number_of_locations'];
  }
  // pg_close($dbConnectObj);
  return $ret;
}

function dbw_getLocationAvailability($params)
{
  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $commandStr = "select location_id from patients where location_id like '".$params['location_id']."';";
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    $ret = "yes";
  }
  // pg_close($dbConnectObj);
  return $ret;
}

function dbw_setLanguage($params)
{
  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $commandStr = "update massventil_configuration set language = '".$params['language_code']."';";
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    $ret = "ok";
  }
  // pg_close($dbConnectObj);
  return $ret;
}

function dbw_getTextInLanguage($params)
{
  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $commandStr = "select language from massventil_configuration;";
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $currentLanguageCode = pg_fetch_assoc($dbResult)['language'];
  $commandStr = "select ".$currentLanguageCode." from languages where short_name like '".$params['short_name']."';";
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    $ret = pg_fetch_assoc($dbResult)[$currentLanguageCode];
  }
  // pg_close($dbConnectObj);
  return $ret;
}

function dbw_getDataEventTypes($params)
{
  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $commandStr = "select description from event_types;";
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    $ret = pg_fetch_all($dbResult);
  }
  // pg_close($dbConnectObj);
  return $ret;
}

// to get patient data in case of patient data read
function dbw_getPatientData($params)
{
  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $commandStr = "select * from patients, patient_data where patients.id = patient_data.patient_id and patients.id like '".$params['patient_id']."';";
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    $returnStr = pg_fetch_all($dbResult);
    $ret = json_encode($returnStr);
  }
  // pg_close($dbConnectObj);
  return $ret;
}

function dbw_removeUnsusedDashboards()
{
  $ret = "";

  // get number of locations
  $nol = dbw_getNumberOfLocations(null);

  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $commandStr = "select * from dashboard where search_text like 'patient%dashboard';";
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $dbCmdTuples = pg_affected_rows($dbResult);
  if ($dbCmdTuples == "")
  {
    $ret = "error";
  }
  else
  {
    while ($row = pg_fetch_assoc($dbResult))
    {
      $num = (int) filter_var($row['search_text'], FILTER_SANITIZE_NUMBER_INT);
      if ($num > $nol)
      {
	$deleteStr = "delete from dashboard where search_text like 'patient ".$num." dashboard';";
	$dbDeleteResult = pg_query($dbConnectObj, $deleteStr);
      }
    }
  }
  // pg_close($dbConnectObj);

  return $ret;
}

// $params = {'language_code' => 'target'}
function dbw_refreshDashboardsAndWidgetsLanguage($params)
{
  // collect strings to change according to selected language code
  $namesToGet = array('patient', 'ventilation', 'inspiratory_hold', 'next_patient');

  // get current language code
  $dbConnectObj = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $commandStr = "select language from massventil_configuration;";
  $dbResult = pg_query($dbConnectObj, $commandStr);
  $currentLanguageCode = pg_fetch_assoc($dbResult)['language'];

  // get complete language table
  $commandStr = "select ".$currentLanguageCode." from languages where type like 'text';";
  $dbResultLanguages = pg_query($dbConnectObj, $commandStr);
  // get complete dashboard table
  $commandStr = "select * from dashboard where search_text like 'patient % dashboard';";
  $dbResultDashboards = pg_query($dbConnectObj, $commandStr);
  // get complete widget_type table
  $commandStr = "select * from widget_type where bundle_alias like 'massventil_widgets';";
  $dbResultWidgets = pg_query($dbConnectObj, $commandStr);

  $dbCmdTuples = pg_affected_rows($dbResultLanguages);
  $dbCmdTuples .= pg_affected_rows($dbResultDashboards);
  $dbCmdTuples .= pg_affected_rows($dbResultWidgets);

  if ($dbCmdTuples == "")
  {
    $ret = "error";
    echo '<br>ERROR GETTING LANGUAGES, DASHBOARD or WIDGET_TYPE TABLE<br>';
  }
  else
  {
    $retLanguages = pg_fetch_all($dbResultLanguages);
    $retDashboards = pg_fetch_all($dbResultDashboards);
    $retWidgets = pg_fetch_all($dbResultWidgets);
    //echo 'Current language code is "' . $currentLanguageCode . '"<br><br>';
    $matches = array();
    //set dashboard-side language specific texts

    foreach ($retDashboards as &$dashboardEntry)
    {
      preg_match('/([0-9]+)/', $dashboardEntry['search_text'], $matches);
      include ('../dashboards/dashboard_json.php');
      $dbw_copyDashboardTemplate = $dashboardTemplate;
      $dbw_copyDashboardTemplate = str_replace("MVDeviceXXX", "MVDevice" . $matches[0], $dashboardTemplate);
      // get patient in language invariant
      $dbw_commandSql = "select ".$currentLanguageCode." from languages where short_name like 'patient';";
      $patientInSelectedLanguageResult = pg_query($dbConnectObj, $dbw_commandSql);
      $ret = pg_fetch_assoc($patientInSelectedLanguageResult)[$currentLanguageCode];
      $dbw_copyDashboardTemplate = str_replace("PatientXXX", $ret . " " . $matches[0], $dbw_copyDashboardTemplate);
      // get ventilation in language invariant
      $dbw_commandSql = "select ".$currentLanguageCode." from languages where short_name like 'ventilation';";
      $patientInSelectedLanguageResult = pg_query($dbConnectObj, $dbw_commandSql);
      $ret = pg_fetch_assoc($patientInSelectedLanguageResult)[$currentLanguageCode];
      $dbw_copyDashboardTemplate = str_replace('"Ventillation"', '"'.$ret.'"', $dbw_copyDashboardTemplate);
      // update configuration in dashboard N
      $dbw_commandSql = "update dashboard set configuration = '" . $dbw_copyDashboardTemplate . "' where search_text like '".$dashboardEntry['search_text']."';";
      $dbw_dashboardUpdateToLanguageResult = pg_query($dbConnectObj, $dbw_commandSql);
      $dbCmdTuples = pg_affected_rows($dbw_dashboardUpdateToLanguageResult);
      if ($dbCmdTuples == "")
      {
	$ret = "error 2";
	echo '<br><br>Error during updating dashboard to selected language<br><br>';
      }

    }


    //set widget-side language specific texts
    $retWidgets = pg_fetch_all($dbResultWidgets);
    foreach ($retWidgets as &$widgetsEntry)
    {
      if ($widgetsEntry['name'] == 'Insp Hold Button')
      {
	// get inspiratory hold button in language invariant (inspiratory_hold in languages, Insp Hold Button in widget_type)
	$dbw_commandSql = "select ".$currentLanguageCode." from languages where short_name like 'inspiratory_hold';";
	$inspiratoryHoldButtonInSelectedLanguageResult = pg_query($dbConnectObj, $dbw_commandSql);
	$ret = pg_fetch_assoc($inspiratoryHoldButtonInSelectedLanguageResult)[$currentLanguageCode];
	$ret = str_replace(' ', '<br>', $ret);
	$dbw_data = json_decode($widgetsEntry['descriptor'], true);
	// create button templateHtml from template
	$dbw_buttonTemplateHtml = '<button class="button">NAME_XXX</button>';
	$dbw_buttonTemplateHtml = str_replace('NAME_XXX', $ret, $dbw_buttonTemplateHtml);
	$dbw_data['templateHtml'] = $dbw_buttonTemplateHtml;
	$widgetsEntry['descriptor'] = json_encode($dbw_data);
	$dbw_commandSql = "update widget_type set descriptor = '" . $widgetsEntry['descriptor'] . "' where name like 'Insp Hold Button';";
	$dbw_inspiratoryHoldButtonInSelectedLanguageUpdateResult = pg_query($dbConnectObj, $dbw_commandSql);
	$dbCmdTuples = pg_affected_rows($dbw_dashboardUpdateToLanguageResult);
	if ($dbCmdTuples == "")
	{
	  $ret = "error 3";
	  echo '<br><br>Error during updating widget to selected language<br><br>';
	}
      }
      else if ($widgetsEntry['name'] == 'Next Patient Button')
      {
	// get next patient button in language invariant (next_patient in languages, Next Patient Button in widget_type)
	$dbw_commandSql = "select ".$currentLanguageCode." from languages where short_name like 'next_patient';";
	$inspiratoryHoldButtonInSelectedLanguageResult = pg_query($dbConnectObj, $dbw_commandSql);
	$ret = pg_fetch_assoc($inspiratoryHoldButtonInSelectedLanguageResult)[$currentLanguageCode];
	$ret = str_replace(' ', '<br>', $ret);
	$dbw_data = json_decode($widgetsEntry['descriptor'], true);
	// create button templateHtml from template
	//$dbw_buttonTemplateHtml = '<button class="button">NAME_XXX</button>';
	$dbw_buttonTemplateHtml = '<div ng-repeat="actionDescriptor in ctx.actionsApi.getActionDescriptors(\'actionCellButton\')"><button class="button" ng-click="onButtonClick($event, entity, actionDescriptor)">NAME_XXX</button></div>';
	$dbw_buttonTemplateHtml = str_replace('NAME_XXX', $ret, $dbw_buttonTemplateHtml);
	$dbw_data['templateHtml'] = $dbw_buttonTemplateHtml;
	$widgetsEntry['descriptor'] = json_encode($dbw_data, JSON_UNESCAPED_SLASHES);
	$dbw_commandSql = "update widget_type set descriptor = '" . str_replace('\'', '\'\'', $widgetsEntry['descriptor']) . "' where name like 'Next Patient Button';";
	$dbw_nextPatientButtonInSelectedLanguageUpdateResult = pg_query($dbConnectObj, $dbw_commandSql);
	$dbCmdTuples = pg_affected_rows($dbw_dashboardUpdateToLanguageResult);
	if ($dbCmdTuples == "")
	{
	  $ret = "error 4";
	  echo '<br><br>Error during updating widget to selected language<br><br>';
	}
      }
      // get modify patient button in language invariant (new_patient_modify_patient in languages, Modify Patient Button in widget_type)
      else if ($widgetsEntry['name'] == 'Modify Patient Button')
      {
	// get next patient button in language invariant (next_patient in languages, Next Patient Button in widget_type)
	$dbw_commandSql = "select ".$currentLanguageCode." from languages where short_name like 'new_patient_modify_patient';";
	$inspiratoryHoldButtonInSelectedLanguageResult = pg_query($dbConnectObj, $dbw_commandSql);
	$ret = pg_fetch_assoc($inspiratoryHoldButtonInSelectedLanguageResult)[$currentLanguageCode];
	$ret = str_replace(' ', '<br>', $ret);
	$dbw_data = json_decode($widgetsEntry['descriptor'], true);
	// create button templateHtml from template
	//$dbw_buttonTemplateHtml = '<button class="button">NAME_XXX</button>';
	$dbw_buttonTemplateHtml = '<div ng-repeat="actionDescriptor in ctx.actionsApi.getActionDescriptors(\'actionCellButton\')"><button class="button" ng-click="onButtonClick($event, entity, actionDescriptor)">NAME_XXX</button></div>';
	$dbw_buttonTemplateHtml = str_replace('NAME_XXX', $ret, $dbw_buttonTemplateHtml);
	$dbw_data['templateHtml'] = $dbw_buttonTemplateHtml;
	$widgetsEntry['descriptor'] = json_encode($dbw_data, JSON_UNESCAPED_SLASHES);
	$dbw_commandSql = "update widget_type set descriptor = '" . str_replace('\'', '\'\'', $widgetsEntry['descriptor']) . "' where name like 'Modify Patient Button';";
	$dbw_nextPatientButtonInSelectedLanguageUpdateResult = pg_query($dbConnectObj, $dbw_commandSql);
	$dbCmdTuples = pg_affected_rows($dbw_dashboardUpdateToLanguageResult);
	if ($dbCmdTuples == "")
	{
	  $ret = "error 4";
	  echo '<br><br>Error during updating widget to selected language<br><br>';
	}
      }
    }

  }
}

?>
