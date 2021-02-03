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
 * Brief: This PHP script file contains a template for building up widgets.
 *
 */

<?php
$widgetTemplate = '"XXX_WIDGET_ID_XXX": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "location_2",
      "type": "latest",
      "title": "New widget",
      "sizeX": 2,
      "sizeY": 2,
      "config": {
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {
          "locationID": "XXX_LOCATION_ID_XXX"
        },
        "title": "New Location",
        "datasources": [XXX_DATASOURCES_XXX],
        "timewindow": {
          "realtime": {
            "timewindowMs": 60000
          }
        },
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
        "actions": {
          "actionCellButton": [
            {
              "id": "2fd48d65-cba5-fab9-5ad6-2c54bf3c1008",
              "name": "EnterToMVDevice1",
              "icon": "more_horiz",
              "type": "openDashboard",
              "targetDashboardId": "XXX_TARGET_DASHBOARD_ID_XXX",
              "targetDashboardStateId": null,
              "setEntityId": false
            }
          ]
        },
        "targetDeviceAliasIds": [
          "4b0e0625-1ff2-71b0-26f1-17d73db89345"
        ]
      },
      "id": "XXX_WIDGET_ID_XXX"
    }';
?>
