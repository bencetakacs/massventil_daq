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
 * Brief: This PHP script file contains a template for building up base widget.
 *
 */

<?php
$baseWidgetTemplate = '"XXX_BASE_WIDGET_ID_XXX": {
      "isSystemType": true,
      "bundleAlias": "cards",
      "typeAlias": "html_card",
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
        "settings": {
          "cardHtml": "<img id=\"patientSummaryIcon\" src=\"http://192.168.0.222/resources/patient_summary_icon.png\">",
          "cardCss": "#patientSummaryIcon{width: 100%; height: auto;}"
        },
        "title": "New HTML Card",
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
      "id": "XXX_BASE_WIDGET_ID_XXX"
    }';
?>
