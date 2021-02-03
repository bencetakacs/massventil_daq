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
 * Brief: This PHP script file contains template strings for automatic widget subscreen generation.
 *
 */

<?php
$widgetTemplate = '"XXX_ALERT_TITLE_ID_XXX": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "alert_title",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 8,
      "sizeY": 2,
      "config": {
        "showTitle": false,
        "backgroundColor": "rgb(255, 255, 255)",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "8px",
        "settings": {
          "locationID": "XXX_LOCATION_ID_XXX"
        },
        "title": "New Alert Title",
        "dropShadow": false,
        "targetDeviceAliases": [],
        "datasources": [],
        "showTitleIcon": false,
        "titleIcon": null,
        "iconColor": "rgba(0, 0, 0, 0.87)",
        "iconSize": "24px",
        "titleTooltip": "",
        "enableFullscreen": false,
        "widgetStyle": {},
        "titleStyle": {
          "fontSize": "16px",
          "fontWeight": 400
        },
        "useDashboardTimewindow": true,
        "displayTimewindow": true,
        "showLegend": false,
        "targetDeviceAliasIds": [
          "XXX_TARGET_DEVICE_ALIAS_ID_XXX"
        ],
        "actions": {}
      },
      "id": "XXX_ALERT_TITLE_ID_XXX"
    },
    "XXX_RR_MIN_ID_XXX": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "roundbar2",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 5,
      "sizeY": 3,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {
          "paramName": "RR min",
          "minVal": 2,
          "maxVal": 60
        },
        "title": "New Alarm Settings RoundBar",
        "showTitleIcon": false,
        "titleIcon": null,
        "iconColor": "rgba(0, 0, 0, 0.87)",
        "iconSize": "24px",
        "titleTooltip": "",
        "dropShadow": false,
        "enableFullscreen": false,
        "widgetStyle": {},
        "titleStyle": {
          "fontSize": "16px",
          "fontWeight": 400
        },
        "useDashboardTimewindow": true,
        "displayTimewindow": true,
        "showLegend": false,
        "actions": {},
        "datasources": [],
        "targetDeviceAliasIds": [
          "XXX_TARGET_DEVICE_ALIAS_ID_XXX"
        ]
      },
      "id": "XXX_RR_MIN_ID_XXX"
    },
    "XXX_RR_MAX_ID_XXX": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "roundbar2",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 5,
      "sizeY": 3,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {
          "paramName": "RR max",
          "minVal": 2,
          "maxVal": 60
        },
        "title": "New Alarm Settings RoundBar",
        "showTitleIcon": false,
        "titleIcon": null,
        "iconColor": "rgba(0, 0, 0, 0.87)",
        "iconSize": "24px",
        "titleTooltip": "",
        "dropShadow": false,
        "enableFullscreen": false,
        "widgetStyle": {},
        "titleStyle": {
          "fontSize": "16px",
          "fontWeight": 400
        },
        "useDashboardTimewindow": true,
        "displayTimewindow": true,
        "showLegend": false,
        "actions": {},
        "datasources": [],
        "targetDeviceAliasIds": [
          "XXX_TARGET_DEVICE_ALIAS_ID_XXX"
        ]
      },
      "id": "XXX_RR_MAX_ID_XXX"
    },
    "XXX_MV_MIN_ID_XXX": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "roundbar2",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 5,
      "sizeY": 3,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {
          "paramName": "MV min",
          "minVal": 2,
          "maxVal": 8
        },
        "title": "New Alarm Settings RoundBar",
        "showTitleIcon": false,
        "titleIcon": null,
        "iconColor": "rgba(0, 0, 0, 0.87)",
        "iconSize": "24px",
        "titleTooltip": "",
        "dropShadow": false,
        "enableFullscreen": false,
        "widgetStyle": {},
        "titleStyle": {
          "fontSize": "16px",
          "fontWeight": 400
        },
        "useDashboardTimewindow": true,
        "displayTimewindow": true,
        "showLegend": false,
        "actions": {},
        "datasources": [],
        "targetDeviceAliasIds": [
          "XXX_TARGET_DEVICE_ALIAS_ID_XXX"
        ]
      },
      "id": "XXX_MV_MIN_ID_XXX"
    },
    "XXX_MV_MAX_ID_XXX": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "roundbar2",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 5,
      "sizeY": 3,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {
          "paramName": "MV max",
          "minVal": 2,
          "maxVal": 8
        },
        "title": "New Alarm Settings RoundBar",
        "showTitleIcon": false,
        "titleIcon": null,
        "iconColor": "rgba(0, 0, 0, 0.87)",
        "iconSize": "24px",
        "titleTooltip": "",
        "dropShadow": false,
        "enableFullscreen": false,
        "widgetStyle": {},
        "titleStyle": {
          "fontSize": "16px",
          "fontWeight": 400
        },
        "useDashboardTimewindow": true,
        "displayTimewindow": true,
        "showLegend": false,
        "actions": {},
        "datasources": [],
        "targetDeviceAliasIds": [
          "XXX_TARGET_DEVICE_ALIAS_ID_XXX"
        ]
      },
      "id": "XXX_MV_MAX_ID_XXX"
    },
    "XXX_VT_MAX_ID_XXX": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "roundbar2",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 5,
      "sizeY": 3,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {
          "paramName": "VT max",
          "minVal": 50,
          "maxVal": 2000
        },
        "title": "New Alarm Settings RoundBar",
        "showTitleIcon": false,
        "titleIcon": null,
        "iconColor": "rgba(0, 0, 0, 0.87)",
        "iconSize": "24px",
        "titleTooltip": "",
        "dropShadow": false,
        "enableFullscreen": false,
        "widgetStyle": {},
        "titleStyle": {
          "fontSize": "16px",
          "fontWeight": 400
        },
        "useDashboardTimewindow": true,
        "displayTimewindow": true,
        "showLegend": false,
        "actions": {},
        "datasources": [],
        "targetDeviceAliasIds": [
          "XXX_TARGET_DEVICE_ALIAS_ID_XXX"
        ]
      },
      "id": "XXX_VT_MAX_ID_XXX"
    },
    "XXX_P_MAX_ID_XXX": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "roundbar2",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 5,
      "sizeY": 3,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {
          "paramName": "Pmax",
          "minVal": 20,
          "maxVal": 60
        },
        "title": "New Alarm Settings RoundBar",
        "showTitleIcon": false,
        "titleIcon": null,
        "iconColor": "rgba(0, 0, 0, 0.87)",
        "iconSize": "24px",
        "titleTooltip": "",
        "dropShadow": false,
        "enableFullscreen": false,
        "widgetStyle": {},
        "titleStyle": {
          "fontSize": "16px",
          "fontWeight": 400
        },
        "useDashboardTimewindow": true,
        "displayTimewindow": true,
        "showLegend": false,
        "actions": {},
        "datasources": [],
        "targetDeviceAliasIds": [
          "XXX_TARGET_DEVICE_ALIAS_ID_XXX"
        ]
      },
      "id": "XXX_P_MAX_ID_XXX"
    },
    "XXX_ALARM_BUTTON_ID_XXX": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "alarm_button",
      "type": "static",
      "title": "New widget",
      "sizeX": 2,
      "sizeY": 2,
      "config": {
        "datasources": [],
        "timewindow": {
          "realtime": {
            "timewindowMs": 60000
          }
        },
        "showTitle": false,
        "backgroundColor": "rgb(255, 255, 255)",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "8px",
        "settings": {},
        "title": "New Alarm Button",
        "dropShadow": false,
        "showTitleIcon": false,
        "titleIcon": null,
        "iconColor": "rgba(0, 0, 0, 0.87)",
        "iconSize": "24px",
        "titleTooltip": "",
        "enableFullscreen": false,
        "widgetStyle": {},
        "titleStyle": {
          "fontSize": "16px",
          "fontWeight": 400
        },
        "useDashboardTimewindow": true,
        "displayTimewindow": true,
        "showLegend": false,
        "actions": {}
      },
      "id": "XXX_ALARM_BUTTON_ID_XXX"
    },
    "XXX_AUTO_ALARM_SETTINGS_ID_XXX": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "auto_alarm_settings",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 10,
      "sizeY": 1,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {},
        "title": "New Auto Alarm settings",
        "showTitleIcon": false,
        "titleIcon": null,
        "iconColor": "rgba(0, 0, 0, 0.87)",
        "iconSize": "24px",
        "titleTooltip": "",
        "dropShadow": false,
        "enableFullscreen": false,
        "widgetStyle": {},
        "titleStyle": {
          "fontSize": "16px",
          "fontWeight": 400
        },
        "useDashboardTimewindow": true,
        "displayTimewindow": true,
        "showLegend": false,
        "actions": {},
        "datasources": [],
        "targetDeviceAliasIds": [
          "XXX_TARGET_DEVICE_ALIAS_ID_XXX"
        ]
      },
      "id": "XXX_AUTO_ALARM_SETTINGS_ID_XXX"
    } ';
?>
