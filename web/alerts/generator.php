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
 * Brief: This PHP script file contains template strings for automatic Dashboard generation.
 *
 */

<?php

echo "Generate Alert Dashboard State<br><br>";

include ('alert_entity_template.php');
include ('alert_widgets_template.php');
include ('alert_state_template.php');
include ('alert_settings_template.php');

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


if (isset($_GET['generate']))
{
  $NUMBER_OF_GENERATIONS = $_GET['generate'];

  echo 'Alert states are about to generate...' . '<br><br>';

  // Concatenated variables
  $allEntities = "";
  $allWidgets = "";
  $allStates = "";

  // Generate global ids
  for ($x = 1; $x <= $NUMBER_OF_GENERATIONS; $x++)
  {
    $XXX_TARGET_DEVICE_ALIAS_ID_XXX[$x] = uniqidReal(31);
    $XXX_RR_MIN_ID_XXX[$x] = uniqidReal(31);
    $XXX_RR_MAX_ID_XXX[$x] = uniqidReal(31);
    $XXX_MV_MIN_ID_XXX[$x] = uniqidReal(31);
    $XXX_MV_MAX_ID_XXX[$x] = uniqidReal(31);
    $XXX_VT_MAX_ID_XXX[$x] = uniqidReal(31);
    $XXX_P_MAX_ID_XXX[$x] = uniqidReal(31);
    $XXX_ALARM_BUTTON_ID_XXX[$x] = uniqidReal(31);
    $XXX_AUTO_ALARM_SETTINGS_ID_XXX[$x] = uniqidReal(31);
    $XXX_ALERT_TITLE_ID_XXX[$x] = uniqidReal(31);
  }


  for ($x = 1; $x <= $NUMBER_OF_GENERATIONS; $x++) 
  {
    $copyEntityTemplate = $entityTemplate;
    $copyEntityTemplate = str_replace("XXX_TARGET_DEVICE_ALIAS_ID_XXX", $XXX_TARGET_DEVICE_ALIAS_ID_XXX[$x], $copyEntityTemplate);
    $copyEntityTemplate = str_replace("XXX_TARGET_DEVICE_ALIAS_NAME", "MVDevice" . $x, $copyEntityTemplate);  
    $copyEntityTemplate = str_replace("XXX_DEVICE_NAME_FILTER_XXX", "MVDevice" . $x, $copyEntityTemplate);  
    //echo $copyEntityTemplate . "<br>";
    if ($x != $NUMBER_OF_GENERATIONS)
    {
      $copyEntityTemplate .= ",";
    }
    $allEntities = $allEntities . $copyEntityTemplate;
  }

  for ($x = 1; $x <= $NUMBER_OF_GENERATIONS; $x++) 
  {
    $copyWidgetTemplate = $widgetTemplate;
    $copyWidgetTemplate = str_replace("XXX_ALERT_TITLE_ID_XXX", $XXX_ALERT_TITLE_ID_XXX[$x], $copyWidgetTemplate);
    $copyWidgetTemplate = str_replace("XXX_LOCATION_ID_XXX", $x, $copyWidgetTemplate);
    $copyWidgetTemplate = str_replace("XXX_RR_MIN_ID_XXX", $XXX_RR_MIN_ID_XXX[$x], $copyWidgetTemplate);
    $copyWidgetTemplate = str_replace("XXX_RR_MAX_ID_XXX", $XXX_RR_MAX_ID_XXX[$x], $copyWidgetTemplate);
    $copyWidgetTemplate = str_replace("XXX_MV_MIN_ID_XXX", $XXX_MV_MIN_ID_XXX[$x], $copyWidgetTemplate);
    $copyWidgetTemplate = str_replace("XXX_MV_MAX_ID_XXX", $XXX_MV_MAX_ID_XXX[$x], $copyWidgetTemplate);
    $copyWidgetTemplate = str_replace("XXX_VT_MAX_ID_XXX", $XXX_VT_MAX_ID_XXX[$x], $copyWidgetTemplate);
    $copyWidgetTemplate = str_replace("XXX_P_MAX_ID_XXX", $XXX_P_MAX_ID_XXX[$x], $copyWidgetTemplate);
    $copyWidgetTemplate = str_replace("XXX_ALARM_BUTTON_ID_XXX", $XXX_ALARM_BUTTON_ID_XXX[$x], $copyWidgetTemplate);
    $copyWidgetTemplate = str_replace("XXX_TARGET_DEVICE_ALIAS_ID_XXX", $XXX_TARGET_DEVICE_ALIAS_ID_XXX[$x], $copyWidgetTemplate);
    $copyWidgetTemplate = str_replace("XXX_AUTO_ALARM_SETTINGS_ID_XXX", $XXX_AUTO_ALARM_SETTINGS_ID_XXX[$x], $copyWidgetTemplate);
    if ($x != $NUMBER_OF_GENERATIONS)
    {
      $copyWidgetTemplate .= ",";
    }
    $allWidgets = $allWidgets . $copyWidgetTemplate;
  }

  for ($x = 1; $x <= $NUMBER_OF_GENERATIONS; $x++) 
  {
    $copyStateTemplate = $stateTemplate;
    $copyStateTemplate = str_replace("XXX_STATE_NAME_XXX", "alarmsettings" . $x, $copyStateTemplate);
    $copyStateTemplate = str_replace("XXX_LOCATION_ID_XXX", $x, $copyStateTemplate);
    $copyStateTemplate = str_replace("XXX_RR_MIN_IN_STATE_XXX", $XXX_RR_MIN_ID_XXX[$x], $copyStateTemplate);
    $copyStateTemplate = str_replace("XXX_RR_MAX_IN_STATE_XXX", $XXX_RR_MAX_ID_XXX[$x], $copyStateTemplate);
    $copyStateTemplate = str_replace("XXX_MV_MIN_IN_STATE_XXX", $XXX_MV_MIN_ID_XXX[$x], $copyStateTemplate);
    $copyStateTemplate = str_replace("XXX_MV_MAX_IN_STATE_XXX", $XXX_MV_MAX_ID_XXX[$x], $copyStateTemplate);
    $copyStateTemplate = str_replace("XXX_VT_MAX_IN_STATE_XXX", $XXX_VT_MAX_ID_XXX[$x], $copyStateTemplate);
    $copyStateTemplate = str_replace("XXX_P_MAX_IN_STATE_XXX", $XXX_P_MAX_ID_XXX[$x], $copyStateTemplate);
    $copyStateTemplate = str_replace("XXX_ALERT_TITLE_ID_XXX", $XXX_ALERT_TITLE_ID_XXX[$x], $copyStateTemplate);
    $copyStateTemplate = str_replace("XXX_ALARM_BUTTON_ID_XXX", $XXX_ALARM_BUTTON_ID_XXX[$x], $copyStateTemplate);
    $copyStateTemplate = str_replace("XXX_AUTO_ALARM_SETTINGS_ID_XXX", $XXX_AUTO_ALARM_SETTINGS_ID_XXX[$x], $copyStateTemplate);

    if ($x != $NUMBER_OF_GENERATIONS)
    {
      $copyStateTemplate .= ",";
    }
    $allStates = $allStates . $copyStateTemplate;
  }

  $copysettingsTemplate = $settingsTemplate;
  $copysettingsTemplate = str_replace("XXX_WIDGETS_XXX", $allWidgets, $copysettingsTemplate);
  $copysettingsTemplate = str_replace("XXX_STATES_XXX", $allStates, $copysettingsTemplate);
  $copysettingsTemplate = str_replace("XXX_ENTITIES_XXX", $allEntities, $copysettingsTemplate);

  echo 'Alert dashboard with ' . $NUMBER_OF_GENERATIONS . ' states are generated and uploaded into the database.';
  
}



echo '<div width="80%" height="100%">';
echo '<br>';
echo 'Number of alert screens to generate';
echo '<input type="text" id="num">';
echo '<input id="btn' . $prefetchedDeviceName . '" type="button" value="Generate alert dashboard, states and entities" style="background-color:white" onclick="sendGenerateAlertDashboardStatesRequest()">';
echo '</div>';


?>

<script>
function sendGenerateAlertDashboardStatesRequest()
{
  window.location.replace('http://192.168.0.222/alerts/generator.php?generate=' + document.getElementById('num').value + '');
}
</script>


