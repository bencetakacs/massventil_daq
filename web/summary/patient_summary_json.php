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
 * Brief: This PHP script file contains a template for building up patient summary screen.
 *
 */

<?php
$summaryTemplate = '{
  "widgets": {XXX_WIDGETS_XXX},
  "states": {XXX_STATES_XXX},
  "entityAliases": {XXX_ALIASES_XXX},
  "timewindow": {
    "displayValue": "",
    "selectedTab": 0,
    "hideInterval": false,
    "hideAggregation": false,
    "hideAggInterval": false,
    "realtime": {
      "interval": 1000,
      "timewindowMs": 60000
    },
    "history": {
      "historyType": 0,
      "interval": 1000,
      "timewindowMs": 60000,
      "fixedTimewindow": {
        "startTimeMs": 1588145559969,
        "endTimeMs": 1588231959969
      }
    },
    "aggregation": {
      "type": "AVG",
      "limit": 25000
    }
  },
  "settings": {
    "stateControllerId": "entity",
    "showTitle": false,
    "showDashboardsSelect": false,
    "showEntitiesSelect": false,
    "showDashboardTimewindow": false,
    "showDashboardExport": false,
    "toolbarAlwaysOpen": false,
    "titleColor": "rgba(0,0,0,0.870588)"
  }
}';
?>
