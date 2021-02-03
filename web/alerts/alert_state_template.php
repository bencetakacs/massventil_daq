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
 * Brief: This PHP script file contains template strings for automatic state subscreen generation.
 *
 */

<?php
$stateTemplate = '"XXX_STATE_NAME_XXX": {
      "name": "AlarmSettings",
      "root": true,
      "layouts": {
        "main": {
          "widgets": {
            "XXX_ALERT_TITLE_ID_XXX": {
              "sizeX": 8,
              "sizeY": 2,
              "row": 0,
              "col": 0
            },
            "XXX_RR_MIN_IN_STATE_XXX": {
              "sizeX": 5,
              "sizeY": 3,
              "row": 2,
              "col": 7
            },
            "XXX_RR_MAX_IN_STATE_XXX": {
              "sizeX": 5,
              "sizeY": 3,
              "row": 2,
              "col": 16
            },
            "XXX_MV_MIN_IN_STATE_XXX": {
              "sizeX": 5,
              "sizeY": 3,
              "row": 5,
              "col": 7
            },
            "XXX_MV_MAX_IN_STATE_XXX": {
              "sizeX": 5,
              "sizeY": 3,
              "row": 5,
              "col": 16
            },
            "XXX_VT_MAX_IN_STATE_XXX": {
              "sizeX": 5,
              "sizeY": 3,
              "row": 8,
              "col": 7
            },
            "XXX_P_MAX_IN_STATE_XXX": {
              "sizeX": 5,
              "sizeY": 3,
              "row": 8,
              "col": 16
            },
            "XXX_AUTO_ALARM_SETTINGS_ID_XXX": {
              "sizeX": 10,
              "sizeY": 1,
              "row": 11,
              "col": 11
            },
            "XXX_ALARM_BUTTON_ID_XXX": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 10
            }
          },
          "gridSettings": {
            "backgroundColor": "#ffffff",
            "color": "rgba(0,0,0,0.870588)",
            "columns": 24,
            "margins": [
              10,
              10
            ],
            "backgroundSizeMode": "100%",
            "autoFillHeight": false,
            "mobileAutoFillHeight": false,
            "mobileRowHeight": 70
          }
        }
      }
    }';
?>
