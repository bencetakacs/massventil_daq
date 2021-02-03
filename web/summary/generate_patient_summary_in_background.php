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
 * Brief: This PHP script file contains a template for building up patient summary in background.
 *
 */

<?php

include ('../database/database_wrapper.php');
include ('../database/configuration.php');

include ('patient_summary_states_json.php');
include ('patient_summary_base_widget_json.php');
include ('patient_summary_widget_json.php');
include ('patient_summary_json.php');
include ('patient_summary_state_widget.php');
include ('patient_summary_state_base_widget.php');
include ('patient_summary_base_state_widget.php');

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

if (isset($_GET['generatePatientSummary']))
{
  // 1st: set number of locations configured
  /*$db = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");
  $getNumOfLocationsSql = 'update massventil_configuration set number_of_locations = ' . $_GET['generatePatientSummary'];
  $result = pg_query($db, $getNumOfLocationsSql);
  $cmdtuples = pg_affected_rows($result);
  if ($cmdtuples == "")
  {
    echo '<span style="color: #FFFFFF;background-color:#FF0000;text-align:center;">Cannot get number_of_patients from database.</span>';
  }*/

  $numberOfLocations = (int) filter_var($_GET['generatePatientSummary'], FILTER_SANITIZE_NUMBER_INT);

  // a variable for all main entries
  $allBaseWidgetTemplate = "";
  $allWidgetsTemplate = "";
  $allStatesTemplate = "";
  $allStateWidgetTemplate = "";
  $allSummaryStates = "";
  $allSummaryTemplate = "";

  // a variable for IDs
  /*for ($x = 1; $x < ($numberOfLocations / 32) + 1; ++$x)
  {
    $XXX_BASE_WIDGET_ID_XXX[$x] = uniqidReal(31);
    $copyBaseWidgetTemplate = $baseWidgetTemplate;
    $copyBaseWidgetTemplate = str_replace("XXX_BASE_WIDGET_ID_XXX", $XXX_BASE_WIDGET_ID_XXX[$x], $copyBaseWidgetTemplate);
    $allBaseWidgetTemplate = $copyBaseWidgetTemplate;
    if (!($x >= (($numberOfLocations / 32) + 1)))
    {
      //$allBaseWidgetTemplate .= ",";
    }
  }*/
  $XXX_BASE_WIDGET_ID_XXX = uniqidReal(31);
  $copyBaseWidgetTemplate = $baseWidgetTemplate;
  $copyBaseWidgetTemplate = str_replace("XXX_BASE_WIDGET_ID_XXX", $XXX_BASE_WIDGET_ID_XXX, $copyBaseWidgetTemplate);
  $allBaseWidgetTemplate = $copyBaseWidgetTemplate;

  $db = pg_connect("host=".$dbConnServer." port=".$dbConnPort." dbname=thingsboard user=".$dbConnUser." password=".$dbConnPass."");

  // a variable for all widgets ($numberOfLocations times)
  for ($x = 1; $x <= $numberOfLocations; ++$x)
  {
    $XXX_WIDGET_ID_XXX[$x] = uniqidReal(31);
    $XXX_LOCATION_ID_XXX[$x] = $x;
    $getDashboardIDForLocationX = "select id from dashboard where search_text like 'patient " . $x . " dashboard';";
    $result = pg_query($db, $getDashboardIDForLocationX);
    $cmdtuples = pg_affected_rows($result);
    if ($cmdtuples == "")
    {
      echo '<span style="color: #FFFFFF;background-color:#FF0000;text-align:center;">Cannot find dashboard ' . $x . ' in database. Please check whether you have created such.</span>';
      echo '<br>';
      continue;
    }
    $idToTransform = pg_fetch_assoc($result)['id'];
    $firstPartOfID = substr($idToTransform, 0, 3);
    $secondPartOfID = substr($idToTransform, 3, 4);
    $thirdPartOfID = substr($idToTransform, 7, 8);
    $fourthPartOfID = substr($idToTransform, 15, 4);
    $fivethPartOfID = substr($idToTransform, 19, 12);
	
    $targetDashboardID = $thirdPartOfID . "-" . $secondPartOfID . "-1" . $firstPartOfID . "-" . $fourthPartOfID . "-" . $fivethPartOfID;
    $XXX_TARGET_DASHBOARD_ID_XXX[$x] = $targetDashboardID;
    $copyWidgetTemplate = $widgetTemplate;
    $copyWidgetTemplate = str_replace("XXX_WIDGET_ID_XXX", $XXX_WIDGET_ID_XXX[$x], $copyWidgetTemplate);
    $copyWidgetTemplate = str_replace("XXX_LOCATION_ID_XXX", $XXX_LOCATION_ID_XXX[$x], $copyWidgetTemplate);
    $copyWidgetTemplate = str_replace("XXX_TARGET_DASHBOARD_ID_XXX", $XXX_TARGET_DASHBOARD_ID_XXX[$x], $copyWidgetTemplate);
    if ($x != 1)
    {
      $allWidgetsTemplate .= ",";
      $allWidgetsTemplate .= $copyWidgetTemplate;
    }
    else
    {
      $allWidgetsTemplate .= $copyWidgetTemplate;
    }
  }

  // a variable for each state widget
  for ($i = 1; $i < ($numberOfLocations / 32) + 1; ++$i)
  {
    $allStateWidgetTemplate = str_replace("XXX_BASE_STATE_WIDGET_ID_XXX", $XXX_BASE_WIDGET_ID_XXX, $baseStateWidgetTemplate) . ',';

    for ($x = 1; $x <= $numberOfLocations % 32; ++$x)
    {
      $copyStateWidgetTemplate = $stateWidgetTemplate;
      $XXX_STATE_WIDGET_ID_XXX[$x] = $XXX_WIDGET_ID_XXX[$x];
      //$XXX_STATE_WIDGET_ROW_XXX[$x] = ((((int)($x / 9) + 1) * 2)) + 1;
      //$XXX_STATE_WIDGET_COL_XXX[$x] = (($x % 9) * 3) - 3;
      $XXX_STATE_WIDGET_ROW_XXX[$x] = (int)(($x - 1) / 8) * 2 + 3 + ((int)(($x - 1) / 8) * 2) / 2;
      $XXX_STATE_WIDGET_COL_XXX[$x] = (int)(($x - 1) % 8) * 3;
      //echo $XXX_STATE_WIDGET_ROW_XXX[$x] . " and " . $XXX_STATE_WIDGET_COL_XXX[$x] . "<br><br><br>";
      $copyStateWidgetTemplate = str_replace("XXX_STATE_WIDGET_ID_XXX", $XXX_STATE_WIDGET_ID_XXX[$x], $copyStateWidgetTemplate);
      $copyStateWidgetTemplate = str_replace("XXX_STATE_WIDGET_ROW_XXX", $XXX_STATE_WIDGET_ROW_XXX[$x], $copyStateWidgetTemplate);
      $copyStateWidgetTemplate = str_replace("XXX_STATE_WIDGET_COL_XXX", $XXX_STATE_WIDGET_COL_XXX[$x], $copyStateWidgetTemplate);
      if ($x != 1)
      {
        $allStateWidgetTemplate .= ",";
        $allStateWidgetTemplate .= $copyStateWidgetTemplate;
      }
      else
     {
        $allStateWidgetTemplate .= $copyStateWidgetTemplate;
      }
    }
    $statePagesWidgets[$i] = $allStateWidgetTemplate;
  }

  // a variable for each state
  for ($x = 1; $x < ($numberOfLocations / 32) + 1; ++$x)
  {
    $copyStateTemplate = $stateTemplate;
    $XXX_STATE_NAME_XXX[$x] = 'page' . $x;
    $allSummaryStates = str_replace("XXX_STATE_NAME_XXX", $XXX_STATE_NAME_XXX[$x], $copyStateTemplate);
    $allSummaryStates = str_replace("XXX_WIDGETS_XXX", $statePagesWidgets[$x], $allSummaryStates);
  }

  // build up summary template
  $copySummaryTemplate = $summaryTemplate;
  $copySummaryTemplate = str_replace("XXX_WIDGETS_XXX", $allBaseWidgetTemplate . "," . $allWidgetsTemplate, $copySummaryTemplate);
  $copySummaryTemplate = str_replace("XXX_STATES_XXX", $allSummaryStates, $copySummaryTemplate);

  echo 'Performing update...<br><br>';
  $updateSql = "update dashboard set configuration = '" . $copySummaryTemplate . "' where search_text like 'patients summary';";
  //echo $updateSql;
  $result = pg_query($db, $updateSql);
  $cmdtuples = pg_affected_rows($result);
  if ($cmdtuples == "")
  {
    echo '<span style="color: #FFFFFF;background-color:#FF0000;text-align:center;">Update failed: ' . $cmdtuples . '</span>';
  }
  else
  {
    echo '<span style="color: #FFFFFF;background-color:#00FF00;text-align:center;">Patient summary dashboard has been  updated!</span>';
  }

//echo $allBaseWidgetTemplate . ",<br>" . $allWidgetsTemplate;

}

?>











