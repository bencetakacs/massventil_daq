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
 * Brief: This PHP script file contains a template for dashboard generation.
 *
 */

<?php
$dashboardTemplate = 
'
{
  "widgets": {
    "1a6c8c6a-6c37-19ad-8bca-292ee71f20c4": {
      "isSystemType": true,
      "bundleAlias": "charts",
      "typeAlias": "basic_timeseries",
      "type": "timeseries",
      "title": "New widget",
      "sizeX": 22,
      "sizeY": 4,
      "config": {
        "datasources": [
          {
            "type": "entity",
            "dataKeys": [
              {
                "name": "FPatient",
                "type": "timeseries",
                "label": "FPatient",
                "color": "#2196f3",
                "settings": {
                  "excludeFromStacking": false,
                  "hideDataByDefault": false,
                  "disableDataHiding": false,
                  "removeFromLegend": false,
                  "showLines": true,
                  "fillLines": false,
                  "showPoints": false,
                  "showPointShape": "circle",
                  "pointShapeFormatter": "var size = radius * Math.sqrt(Math.PI) / 2;\nctx.moveTo(x - size, y - size);\nctx.lineTo(x + size, y + size);\nctx.moveTo(x - size, y + size);\nctx.lineTo(x + size, y - size);",
                  "showPointsLineWidth": 5,
                  "showPointsRadius": 3,
                  "showSeparateAxis": false,
                  "axisPosition": "left",
                  "comparisonSettings": {
                    "showValuesForComparison": true
                  }
                },
                "_hash": 0.2783930716870271,
                "postFuncBody": "return value * -10;"
              },
              {
                "name": "VPatient",
                "type": "timeseries",
                "label": "VPatient",
                "color": "rgb(211, 47, 47)",
                "settings": {
                  "excludeFromStacking": false,
                  "hideDataByDefault": false,
                  "disableDataHiding": false,
                  "removeFromLegend": false,
                  "showLines": true,
                  "fillLines": false,
                  "showPoints": false,
                  "showPointShape": "circle",
                  "pointShapeFormatter": "var size = radius * Math.sqrt(Math.PI) / 2;\nctx.moveTo(x - size, y - size);\nctx.lineTo(x + size, y + size);\nctx.moveTo(x - size, y + size);\nctx.lineTo(x + size, y - size);",
                  "showPointsLineWidth": 5,
                  "showPointsRadius": 3,
                  "showSeparateAxis": false,
                  "axisPosition": "left",
                  "comparisonSettings": {
                    "showValuesForComparison": true
                  }
                },
                "_hash": 0.6252548878287376,
                "postFuncBody": "return value*1000;"
              }
            ],
            "entityAliasId": "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
          }
        ],
        "timewindow": {
          "realtime": {
            "timewindowMs": 60000
          }
        },
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "8px",
        "settings": {
          "shadowSize": 4,
          "fontColor": "#545454",
          "fontSize": 10,
          "xaxis": {
            "showLabels": true,
            "color": "#545454"
          },
          "yaxis": {
            "showLabels": true,
            "color": "#545454",
            "min": -400,
            "max": 600
          },
          "grid": {
            "color": "#545454",
            "tickColor": "#DDDDDD",
            "verticalLines": true,
            "horizontalLines": true,
            "outlineWidth": 1
          },
          "stack": false,
          "tooltipIndividual": false,
          "timeForComparison": "months",
          "xaxisSecond": {
            "axisPosition": "top",
            "showLabels": true
          }
        },
        "title": "New Timeseries - Flot",
        "dropShadow": false,
        "enableFullscreen": false,
        "titleStyle": {
          "fontSize": "16px",
          "fontWeight": 400
        },
        "mobileHeight": null,
        "showTitleIcon": false,
        "titleIcon": null,
        "iconColor": "rgba(0, 0, 0, 0.87)",
        "iconSize": "24px",
        "titleTooltip": "",
        "widgetStyle": {},
        "useDashboardTimewindow": true,
        "displayTimewindow": true,
        "showLegend": false,
        "actions": {}
      },
      "id": "1a6c8c6a-6c37-19ad-8bca-292ee71f20c4"
    },
    "065d514a-517c-8669-7411-27f12a1a75b5": {
      "isSystemType": true,
      "bundleAlias": "charts",
      "typeAlias": "basic_timeseries",
      "type": "timeseries",
      "title": "New widget",
      "sizeX": 22,
      "sizeY": 4,
      "config": {
        "datasources": [
          {
            "type": "entity",
            "dataKeys": [
              {
                "name": "PPatient",
                "type": "timeseries",
                "label": "PPatient",
                "color": "#2196f3",
                "settings": {
                  "excludeFromStacking": false,
                  "hideDataByDefault": false,
                  "disableDataHiding": false,
                  "removeFromLegend": false,
                  "showLines": true,
                  "fillLines": false,
                  "showPoints": false,
                  "showPointShape": "circle",
                  "pointShapeFormatter": "var size = radius * Math.sqrt(Math.PI) / 2;\nctx.moveTo(x - size, y - size);\nctx.lineTo(x + size, y + size);\nctx.moveTo(x - size, y + size);\nctx.lineTo(x + size, y - size);",
                  "showPointsLineWidth": 5,
                  "showPointsRadius": 3,
                  "tooltipValueFormatter": "",
                  "showSeparateAxis": false,
                  "axisTitle": "",
                  "axisPosition": "left",
                  "axisTicksFormatter": "",
                  "comparisonSettings": {
                    "showValuesForComparison": true,
                    "comparisonValuesLabel": "",
                    "color": ""
                  }
                },
                "_hash": 0.8530871482906193
              },
              {
                "name": "Setpoint",
                "type": "timeseries",
                "label": "Setpoint",
                "color": "#4caf50",
                "settings": {
                  "excludeFromStacking": false,
                  "hideDataByDefault": false,
                  "disableDataHiding": false,
                  "removeFromLegend": false,
                  "showLines": true,
                  "fillLines": false,
                  "showPoints": false,
                  "showPointShape": "circle",
                  "pointShapeFormatter": "var size = radius * Math.sqrt(Math.PI) / 2;\nctx.moveTo(x - size, y - size);\nctx.lineTo(x + size, y + size);\nctx.moveTo(x - size, y + size);\nctx.lineTo(x + size, y - size);",
                  "showPointsLineWidth": 5,
                  "showPointsRadius": 3,
                  "tooltipValueFormatter": "",
                  "showSeparateAxis": false,
                  "axisTitle": "",
                  "axisPosition": "left",
                  "axisTicksFormatter": "",
                  "comparisonSettings": {
                    "showValuesForComparison": true,
                    "comparisonValuesLabel": "",
                    "color": ""
                  }
                },
                "_hash": 0.05183764140730074
              }
            ],
            "entityAliasId": "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
          }
        ],
        "timewindow": {
          "realtime": {
            "timewindowMs": 60000
          }
        },
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "8px",
        "settings": {
          "shadowSize": 4,
          "fontColor": "#545454",
          "fontSize": 10,
          "xaxis": {
            "showLabels": true,
            "color": "#545454"
          },
          "yaxis": {
            "showLabels": true,
            "color": "#545454",
            "max": 80,
            "min": -20
          },
          "grid": {
            "color": "#545454",
            "tickColor": "#DDDDDD",
            "verticalLines": true,
            "horizontalLines": true,
            "outlineWidth": 1
          },
          "stack": false,
          "tooltipIndividual": false,
          "timeForComparison": "months",
          "xaxisSecond": {
            "axisPosition": "top",
            "showLabels": true
          }
        },
        "title": "New Timeseries - Flot",
        "dropShadow": false,
        "enableFullscreen": false,
        "titleStyle": {
          "fontSize": "16px",
          "fontWeight": 400
        },
        "mobileHeight": null,
        "showTitleIcon": false,
        "titleIcon": null,
        "iconColor": "rgba(0, 0, 0, 0.87)",
        "iconSize": "24px",
        "titleTooltip": "",
        "widgetStyle": {},
        "useDashboardTimewindow": true,
        "displayTimewindow": true,
        "showLegend": false,
        "actions": {}
      },
      "id": "065d514a-517c-8669-7411-27f12a1a75b5"
    },
    "8564c390-f48c-85bb-a6e5-dc3d92619cc8": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "button",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 4,
      "sizeY": 2,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {},
        "title": "New Button",
        "datasources": [],
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
        "targetDeviceAliasIds": [
          "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
        ],
        "actions": {
          "headerButton": [],
          "actionCellButton": [
            {
              "id": "d6fd27f6-2c5c-b0a2-6572-e2bc17e04e9e",
              "name": "BackToMain",
              "icon": "more_horiz",
              "type": "openDashboard",
              "targetDashboardId": "e149ca30-8ab3-11ea-ad1f-954cde4a63aa",
              "targetDashboardStateId": null,
              "setEntityId": false
            }
          ]
        }
      },
      "id": "8564c390-f48c-85bb-a6e5-dc3d92619cc8"
    },
    "b6837c1d-c9e6-82d2-2758-4491f2f4e75e": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "insp_hold_button",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 3,
      "sizeY": 2,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {},
        "title": "New Insp Hold Button",
        "datasources": [],
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
        "targetDeviceAliasIds": [
          "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
        ],
        "actions": {}
      },
      "id": "b6837c1d-c9e6-82d2-2758-4491f2f4e75e"
    },
    "12707b10-82f8-733e-fd48-5a1a56262436": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "value_indicator",
      "type": "latest",
      "title": "New widget",
      "sizeX": 2,
      "sizeY": 2,
      "config": {
        "datasources": [
          {
            "type": "entity",
            "dataKeys": [
              {
                "name": "IERatio",
                "type": "timeseries",
                "label": "IERatio",
                "color": "#2196f3",
                "settings": {},
                "_hash": 0.6233004286415469,
                "postFuncBody": "return \"1:\"+(parseInt(value * 10)/10.0);"
              }
            ],
            "entityAliasId": "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
          }
        ],
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
          "paramName": "I_E"
        },
        "title": "New Value Indicator",
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
      "id": "12707b10-82f8-733e-fd48-5a1a56262436"
    },
    "26add815-f5ac-a44b-0286-1e03071578be": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "value_indicator",
      "type": "latest",
      "title": "New widget",
      "sizeX": 2,
      "sizeY": 2,
      "config": {
        "datasources": [
          {
            "type": "entity",
            "dataKeys": [
              {
                "name": "RR",
                "type": "timeseries",
                "label": "RR",
                "color": "#2196f3",
                "settings": {},
                "_hash": 0.8088610553173463,
                "postFuncBody": "return parseInt(value*100) / 100.0;"
              }
            ],
            "entityAliasId": "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
          }
        ],
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
          "paramName": "RR"
        },
        "title": "New Value Indicator",
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
        "actions": {},
        "decimals": 2
      },
      "id": "26add815-f5ac-a44b-0286-1e03071578be"
    },
    "2ef84005-4f64-1f65-df61-5bdcaaf020b4": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "value_indicator",
      "type": "latest",
      "title": "New widget",
      "sizeX": 2,
      "sizeY": 2,
      "config": {
        "datasources": [
          {
            "type": "entity",
            "dataKeys": [
              {
                "name": "FPatient",
                "type": "timeseries",
                "label": "FPatient",
                "color": "#2196f3",
                "settings": {},
                "_hash": 0.4981669012372867,
                "postFuncBody": "return 50;"
              }
            ],
            "entityAliasId": "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
          }
        ],
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
          "paramName": "Flow"
        },
        "title": "New Value Indicator",
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
      "id": "2ef84005-4f64-1f65-df61-5bdcaaf020b4"
    },
    "fba5659c-69b4-965c-4dac-93d354de0757": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "value_indicator",
      "type": "latest",
      "title": "New widget",
      "sizeX": 2,
      "sizeY": 2,
      "config": {
        "datasources": [
          {
            "type": "entity",
            "dataKeys": [
              {
                "name": "MV",
                "type": "timeseries",
                "label": "MV",
                "color": "#2196f3",
                "settings": {},
                "_hash": 0.42978005428076593,
                "postFuncBody": "return parseInt(value*100)/100.0;"
              }
            ],
            "entityAliasId": "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
          }
        ],
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
          "paramName": "MV"
        },
        "title": "New Value Indicator",
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
      "id": "fba5659c-69b4-965c-4dac-93d354de0757"
    },
    "1c3ca1b4-0720-3c10-82e1-4bfec26c90db": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "value_indicator",
      "type": "latest",
      "title": "New widget",
      "sizeX": 2,
      "sizeY": 2,
      "config": {
        "datasources": [
          {
            "type": "entity",
            "dataKeys": [
              {
                "name": "PEEP",
                "type": "timeseries",
                "label": "PEEP",
                "color": "#2196f3",
                "settings": {},
                "_hash": 0.05902172996407162,
                "postFuncBody": "return parseInt(value);"
              }
            ],
            "entityAliasId": "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
          }
        ],
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
          "paramName": "PEEP"
        },
        "title": "New Value Indicator",
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
      "id": "1c3ca1b4-0720-3c10-82e1-4bfec26c90db"
    },
    "f9f56c6a-9921-95e2-592b-694c7a4b7ad2": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "value_indicator",
      "type": "latest",
      "title": "New widget",
      "sizeX": 2,
      "sizeY": 2,
      "config": {
        "datasources": [
          {
            "type": "entity",
            "dataKeys": [
              {
                "name": "Vi",
                "type": "timeseries",
                "label": "Vi",
                "color": "#2196f3",
                "settings": {},
                "_hash": 0.757769528629384,
                "postFuncBody": "return parseInt(value*1000);"
              }
            ],
            "entityAliasId": "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
          }
        ],
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
          "paramName": "Vti"
        },
        "title": "New Value Indicator",
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
      "id": "f9f56c6a-9921-95e2-592b-694c7a4b7ad2"
    },
    "15ca4f90-a52f-d1e2-d4b6-7991c085713f": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "value_indicator",
      "type": "latest",
      "title": "New widget",
      "sizeX": 2,
      "sizeY": 2,
      "config": {
        "datasources": [
          {
            "type": "entity",
            "dataKeys": [
              {
                "name": "Ve",
                "type": "timeseries",
                "label": "Ve",
                "color": "#2196f3",
                "settings": {},
                "_hash": 0.39739330412909335,
                "postFuncBody": "return parseInt(value*-1000);"
              }
            ],
            "entityAliasId": "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
          }
        ],
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
          "paramName": "Vte"
        },
        "title": "New Value Indicator",
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
      "id": "15ca4f90-a52f-d1e2-d4b6-7991c085713f"
    },
    "ab5adaed-2fa2-ae87-3c6e-aae267d16b51": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "roundbar",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 3,
      "sizeY": 3,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {
          "paramName": "VT",
          "minVal": 50,
          "maxVal": 2000,
          "rpcGetMethod": "getVt",
          "rpcSetMethod": "setVt"
        },
        "title": "New RoundBar",
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
          "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
        ]
      },
      "id": "ab5adaed-2fa2-ae87-3c6e-aae267d16b51"
    },
    "a61291e5-8f56-1bf4-4887-a5a4b1b4ee37": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "roundbar",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 3,
      "sizeY": 3,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {
          "paramName": "RR",
          "rpcSetMethod": "setFreq",
          "rpcGetMethod": "getFreq",
          "minVal": 1,
          "maxVal": 50
        },
        "title": "New RoundBar",
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
          "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
        ]
      },
      "id": "a61291e5-8f56-1bf4-4887-a5a4b1b4ee37"
    },
    "18bcccfb-5fbf-d103-0755-5ad2f422a227": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "roundbar",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 3,
      "sizeY": 3,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {
          "paramName": "PEEP",
          "rpcSetMethod": "setPSMIN",
          "rpcGetMethod": "getPSMIN",
          "maxVal": 20,
          "minVal": 0
        },
        "title": "New RoundBar",
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
          "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
        ]
      },
      "id": "18bcccfb-5fbf-d103-0755-5ad2f422a227"
    },
    "12376b84-cee8-d02a-b4fa-ac048d73609c": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "roundbar",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 3,
      "sizeY": 3,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {
          "paramName": "I_E",
          "rpcSetMethod": "setIEratio",
          "maxVal": 20,
          "minVal": 0,
          "rpcGetMethod": "getIEratio"
        },
        "title": "New RoundBar",
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
          "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
        ]
      },
      "id": "12376b84-cee8-d02a-b4fa-ac048d73609c"
    },
    "ac445316-9511-a4e8-6fec-116935d1f061": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "roundbar",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 3,
      "sizeY": 3,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {
          "paramName": "Pmax",
          "rpcSetMethod": "setPSMAX",
          "rpcGetMethod": "getPSMAX",
          "maxVal": 60,
          "minVal": 0
        },
        "title": "New RoundBar",
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
          "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
        ]
      },
      "id": "ac445316-9511-a4e8-6fec-116935d1f061"
    },
    "77d74b50-9552-6be0-adc7-6f3e51db099f": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "toggle_button",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 2,
      "sizeY": 2,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": true,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {
          "parseGpioStatusFunction": "return body[pin] === true;",
          "gpioStatusChangeRequest": {
            "method": "setGpioStatus",
            "paramsBody": "{\n   \"pin\": \"{$pin}\",\n   \"enabled\": \"{$enabled}\"\n}"
          },
          "requestTimeout": 500,
          "switchPanelBackgroundColor": "#b71c1c",
          "gpioStatusRequest": {
            "method": "getGpioStatus",
            "paramsBody": "{}"
          },
          "gpioList": [
            {
              "pin": 1,
              "label": "GPIO 1",
              "row": 0,
              "col": 0,
              "_uniqueKey": 0
            },
            {
              "pin": 2,
              "label": "GPIO 2",
              "row": 0,
              "col": 1,
              "_uniqueKey": 1
            },
            {
              "pin": 3,
              "label": "GPIO 3",
              "row": 1,
              "col": 0,
              "_uniqueKey": 2
            }
          ]
        },
        "title": "Ventilation",
        "showTitleIcon": false,
        "titleIcon": null,
        "iconColor": "rgba(0, 0, 0, 0.87)",
        "iconSize": "24px",
        "titleTooltip": "",
        "dropShadow": false,
        "enableFullscreen": false,
        "widgetStyle": {},
        "titleStyle": {
          "fontSize": "2vh",
          "fontWeight": "bold",
          "color": "#54B0EE",
          "marginTop": "1vw"
        },
        "useDashboardTimewindow": true,
        "displayTimewindow": true,
        "showLegend": false,
        "actions": {},
        "datasources": [],
        "targetDeviceAliasIds": [
          "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
        ]
      },
      "id": "77d74b50-9552-6be0-adc7-6f3e51db099f"
    },
    "78e7c33a-7728-af7f-5bac-76a0154f0d2b": {
      "isSystemType": true,
      "bundleAlias": "cards",
      "typeAlias": "html_card",
      "type": "static",
      "title": "New widget",
      "sizeX": 3,
      "sizeY": 1,
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
          "cardHtml": "<h2 style=\"margin-top: -10px; color: #54BBE0; font-size: 2.8vh;\">PatientXXX</h2>",
          "cardCss": ".card {\n\n}"
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
      "id": "78e7c33a-7728-af7f-5bac-76a0154f0d2b"
    },
    "c20c8392-b569-5d1b-d084-39bc487e8d11": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "ventillation_mode_selector",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 3,
      "sizeY": 1,
      "config": {
        "showTitle": false,
        "backgroundColor": "rgb(255, 255, 255)",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "8px",
        "settings": {},
        "title": "New Ventillation Mode Selector",
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
          "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
        ],
        "actions": {}
      },
      "id": "c20c8392-b569-5d1b-d084-39bc487e8d11"
    },
    "f5eecec9-9402-b22c-30ea-37b668a204db": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "roundbar",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 3,
      "sizeY": 3,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {
          "paramName": "Pinsp",
          "minVal": 2,
          "maxVal": 60,
          "rpcGetMethod": "getPinsp",
          "rpcSetMethod": "setPinsp"
        },
        "title": "New RoundBar",
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
          "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
        ]
      },
      "id": "f5eecec9-9402-b22c-30ea-37b668a204db"
    },
    "ae660bd3-dfcd-9bc2-50d9-77ea6622bc26": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "roundbar",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 3,
      "sizeY": 3,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {
          "paramName": "Trigger",
          "minVal": -1,
          "maxVal": -2,
          "rpcGetMethod": "getTrigger",
          "rpcSetMethod": "setTrigger"
        },
        "title": "New RoundBar",
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
          "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
        ]
      },
      "id": "ae660bd3-dfcd-9bc2-50d9-77ea6622bc26"
    },
    "a9f3041a-394a-1266-7e32-35e8281792c4": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "roundbar",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 3,
      "sizeY": 3,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {
          "paramName": "Trigger",
          "minVal": 1,
          "maxVal": 2,
          "rpcGetMethod": "getTrigger",
          "rpcSetMethod": "setTrigger"
        },
        "title": "New RoundBar",
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
          "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
        ]
      },
      "id": "a9f3041a-394a-1266-7e32-35e8281792c4"
    },
    "d81fe087-9b1f-64ee-3496-b3cc917099b2": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "roundbar",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 3,
      "sizeY": 3,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {
          "paramName": "Trigger",
          "minVal": 1,
          "maxVal": 2,
          "rpcGetMethod": "getTrigger",
          "rpcSetMethod": "setTrigger"
        },
        "title": "New RoundBar",
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
          "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
        ]
      },
      "id": "d81fe087-9b1f-64ee-3496-b3cc917099b2"
    },
    "aaf7b7dd-8a25-cb67-f7df-aa9211acbedc": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "session_status_field",
      "type": "latest",
      "title": "New widget",
      "sizeX": 2,
      "sizeY": 2,
      "config": {
        "datasources": [
          {
            "type": "entity",
            "dataKeys": [
              {
                "name": "sessionID",
                "type": "attribute",
                "label": "sessionID",
                "color": "#2196f3",
                "settings": {},
                "_hash": 0.6545280780866987
              }
            ],
            "entityAliasId": "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
          }
        ],
        "timewindow": {
          "realtime": {
            "timewindowMs": 60000
          }
        },
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "8px",
        "settings": {},
        "title": "New Session Status Field",
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
        "actions": {}
      },
      "id": "aaf7b7dd-8a25-cb67-f7df-aa9211acbedc"
    },
    "6fd0e032-c054-1388-4ee3-a99c89586e89": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "attribute_test",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 5,
      "sizeY": 2,
      "config": {
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "8px",
        "settings": {},
        "title": "New Request Session Button",
        "targetDeviceAliases": [],
        "datasources": [],
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
        "targetDeviceAliasIds": [
          "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
        ],
        "actions": {}
      },
      "id": "6fd0e032-c054-1388-4ee3-a99c89586e89"
    },
    "ac0794c0-215d-46e8-c7ee-951b16060747": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "attribute_test",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 5,
      "sizeY": 2,
      "config": {
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "8px",
        "settings": {},
        "title": "New Request Session Button",
        "targetDeviceAliases": [],
        "datasources": [],
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
        "targetDeviceAliasIds": [
          "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
        ],
        "actions": {}
      },
      "id": "ac0794c0-215d-46e8-c7ee-951b16060747"
    },
    "0d4339ec-6f05-3604-6085-9524c406d401": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "attribute_test",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 5,
      "sizeY": 2,
      "config": {
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "8px",
        "settings": {},
        "title": "New Request Session Button",
        "targetDeviceAliases": [],
        "datasources": [],
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
        "targetDeviceAliasIds": [
          "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
        ],
        "actions": {}
      },
      "id": "0d4339ec-6f05-3604-6085-9524c406d401"
    },
    "9e8a4298-fdc3-dcc1-e462-f0812a9b642a": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "session_status_field",
      "type": "latest",
      "title": "New widget",
      "sizeX": 2,
      "sizeY": 1,
      "config": {
        "datasources": [
          {
            "type": "entity",
            "dataKeys": [
              {
                "name": "sessionID",
                "type": "attribute",
                "label": "sessionID",
                "color": "#2196f3",
                "settings": {},
                "_hash": 0.13957955919424414
              }
            ],
            "entityAliasId": "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
          }
        ],
        "timewindow": {
          "realtime": {
            "timewindowMs": 60000
          }
        },
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "8px",
        "settings": {},
        "title": "New Session Status Field",
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
        "actions": {}
      },
      "id": "9e8a4298-fdc3-dcc1-e462-f0812a9b642a"
    },
    "8c6ba7db-058b-65d8-4fed-6e2b75f8d458": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "roundbar",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 3,
      "sizeY": 3,
      "config": {
        "targetDeviceAliases": [],
        "showTitle": false,
        "backgroundColor": "#fff",
        "color": "rgba(0, 0, 0, 0.87)",
        "padding": "0px",
        "settings": {
          "paramName": " O2  ",
          "minVal": 20,
          "maxVal": 100,
          "rpcGetMethod": "getO2",
          "rpcSetMethod": "setO2"
        },
        "title": "New RoundBar",
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
          "ead3636d-a7da-bfeb-d34e-be6e79df5c25"
        ]
      },
      "id": "8c6ba7db-058b-65d8-4fed-6e2b75f8d458"
    }
  },
  "states": {
    "CMV": {
      "name": "CMV",
      "root": true,
      "layouts": {
        "main": {
          "widgets": {
            "1a6c8c6a-6c37-19ad-8bca-292ee71f20c4": {
              "sizeX": 22,
              "sizeY": 4,
              "mobileHeight": null,
              "row": 2,
              "col": 0
            },
            "065d514a-517c-8669-7411-27f12a1a75b5": {
              "sizeX": 22,
              "sizeY": 4,
              "mobileHeight": null,
              "row": 6,
              "col": 0
            },
            "8564c390-f48c-85bb-a6e5-dc3d92619cc8": {
              "sizeX": 4,
              "sizeY": 2,
              "row": 10,
              "col": 20
            },
            "b6837c1d-c9e6-82d2-2758-4491f2f4e75e": {
              "sizeX": 3,
              "sizeY": 2,
              "row": 0,
              "col": 2
            },
            "12707b10-82f8-733e-fd48-5a1a56262436": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 2,
              "col": 22
            },
            "26add815-f5ac-a44b-0286-1e03071578be": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 20
            },
            "2ef84005-4f64-1f65-df61-5bdcaaf020b4": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 16
            },
            "fba5659c-69b4-965c-4dac-93d354de0757": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 18
            },
            "1c3ca1b4-0720-3c10-82e1-4bfec26c90db": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 22
            },
            "f9f56c6a-9921-95e2-592b-694c7a4b7ad2": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 4,
              "col": 22
            },
            "15ca4f90-a52f-d1e2-d4b6-7991c085713f": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 6,
              "col": 22
            },
            "ab5adaed-2fa2-ae87-3c6e-aae267d16b51": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 0
            },
            "a61291e5-8f56-1bf4-4887-a5a4b1b4ee37": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 4
            },
            "18bcccfb-5fbf-d103-0755-5ad2f422a227": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 8
            },
            "12376b84-cee8-d02a-b4fa-ac048d73609c": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 12
            },
            "77d74b50-9552-6be0-adc7-6f3e51db099f": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 0
            },
            "78e7c33a-7728-af7f-5bac-76a0154f0d2b": {
              "sizeX": 3,
              "sizeY": 1,
              "row": 0,
              "col": 5
            },
            "c20c8392-b569-5d1b-d084-39bc487e8d11": {
              "sizeX": 3,
              "sizeY": 1,
              "row": 1,
              "col": 5
            },
            "aaf7b7dd-8a25-cb67-f7df-aa9211acbedc": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 8,
              "col": 22
            },
            "6fd0e032-c054-1388-4ee3-a99c89586e89": {
              "sizeX": 5,
              "sizeY": 2,
              "row": 0,
              "col": 11
            },
            "8c6ba7db-058b-65d8-4fed-6e2b75f8d458": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 16
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
    },
    "BiPAP": {
      "name": "BiPAP",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {
            "1a6c8c6a-6c37-19ad-8bca-292ee71f20c4": {
              "sizeX": 22,
              "sizeY": 4,
              "mobileHeight": null,
              "row": 2,
              "col": 0
            },
            "065d514a-517c-8669-7411-27f12a1a75b5": {
              "sizeX": 22,
              "sizeY": 4,
              "mobileHeight": null,
              "row": 6,
              "col": 0
            },
            "8564c390-f48c-85bb-a6e5-dc3d92619cc8": {
              "sizeX": 4,
              "sizeY": 2,
              "row": 10,
              "col": 20
            },
            "b6837c1d-c9e6-82d2-2758-4491f2f4e75e": {
              "sizeX": 3,
              "sizeY": 2,
              "row": 0,
              "col": 2
            },
            "12707b10-82f8-733e-fd48-5a1a56262436": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 2,
              "col": 22
            },
            "26add815-f5ac-a44b-0286-1e03071578be": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 20
            },
            "2ef84005-4f64-1f65-df61-5bdcaaf020b4": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 16
            },
            "fba5659c-69b4-965c-4dac-93d354de0757": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 18
            },
            "1c3ca1b4-0720-3c10-82e1-4bfec26c90db": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 22
            },
            "f9f56c6a-9921-95e2-592b-694c7a4b7ad2": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 4,
              "col": 22
            },
            "15ca4f90-a52f-d1e2-d4b6-7991c085713f": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 6,
              "col": 22
            },
            "a61291e5-8f56-1bf4-4887-a5a4b1b4ee37": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 4
            },
            "18bcccfb-5fbf-d103-0755-5ad2f422a227": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 8
            },
            "12376b84-cee8-d02a-b4fa-ac048d73609c": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 12
            },
            "ac445316-9511-a4e8-6fec-116935d1f061": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 0
            },
            "77d74b50-9552-6be0-adc7-6f3e51db099f": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 0
            },
            "78e7c33a-7728-af7f-5bac-76a0154f0d2b": {
              "sizeX": 4,
              "sizeY": 1,
              "row": 0,
              "col": 5
            },
            "c20c8392-b569-5d1b-d084-39bc487e8d11": {
              "sizeX": 4,
              "sizeY": 1,
              "row": 1,
              "col": 5
            },
            "d81fe087-9b1f-64ee-3496-b3cc917099b2": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 16
            },
            "ac0794c0-215d-46e8-c7ee-951b16060747": {
              "sizeX": 5,
              "sizeY": 2,
              "row": 0,
              "col": 11
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
            "backgroundSizeMode": "100%"
          }
        }
      }
    },
    "CPAP": {
      "name": "CPAP",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {
            "1a6c8c6a-6c37-19ad-8bca-292ee71f20c4": {
              "sizeX": 22,
              "sizeY": 4,
              "mobileHeight": null,
              "row": 2,
              "col": 0
            },
            "065d514a-517c-8669-7411-27f12a1a75b5": {
              "sizeX": 22,
              "sizeY": 4,
              "mobileHeight": null,
              "row": 6,
              "col": 0
            },
            "8564c390-f48c-85bb-a6e5-dc3d92619cc8": {
              "sizeX": 4,
              "sizeY": 2,
              "row": 10,
              "col": 20
            },
            "b6837c1d-c9e6-82d2-2758-4491f2f4e75e": {
              "sizeX": 3,
              "sizeY": 2,
              "row": 0,
              "col": 2
            },
            "12707b10-82f8-733e-fd48-5a1a56262436": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 2,
              "col": 22
            },
            "26add815-f5ac-a44b-0286-1e03071578be": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 20
            },
            "2ef84005-4f64-1f65-df61-5bdcaaf020b4": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 16
            },
            "fba5659c-69b4-965c-4dac-93d354de0757": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 18
            },
            "1c3ca1b4-0720-3c10-82e1-4bfec26c90db": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 22
            },
            "f9f56c6a-9921-95e2-592b-694c7a4b7ad2": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 4,
              "col": 22
            },
            "15ca4f90-a52f-d1e2-d4b6-7991c085713f": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 6,
              "col": 22
            },
            "77d74b50-9552-6be0-adc7-6f3e51db099f": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 0
            },
            "78e7c33a-7728-af7f-5bac-76a0154f0d2b": {
              "sizeX": 4,
              "sizeY": 1,
              "row": 0,
              "col": 5
            },
            "c20c8392-b569-5d1b-d084-39bc487e8d11": {
              "sizeX": 4,
              "sizeY": 1,
              "row": 1,
              "col": 5
            },
            "f5eecec9-9402-b22c-30ea-37b668a204db": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 1
            },
            "0d4339ec-6f05-3604-6085-9524c406d401": {
              "sizeX": 5,
              "sizeY": 2,
              "row": 0,
              "col": 11
            },
            "9e8a4298-fdc3-dcc1-e462-f0812a9b642a": {
              "sizeX": 2,
              "sizeY": 1,
              "row": 8,
              "col": 22
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
            "backgroundSizeMode": "100%"
          }
        }
      }
    },
    "SIMV": {
      "name": "SIMV",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {
            "1a6c8c6a-6c37-19ad-8bca-292ee71f20c4": {
              "sizeX": 22,
              "sizeY": 4,
              "mobileHeight": null,
              "row": 2,
              "col": 0
            },
            "065d514a-517c-8669-7411-27f12a1a75b5": {
              "sizeX": 22,
              "sizeY": 4,
              "mobileHeight": null,
              "row": 6,
              "col": 0
            },
            "8564c390-f48c-85bb-a6e5-dc3d92619cc8": {
              "sizeX": 4,
              "sizeY": 2,
              "row": 10,
              "col": 20
            },
            "b6837c1d-c9e6-82d2-2758-4491f2f4e75e": {
              "sizeX": 3,
              "sizeY": 2,
              "row": 0,
              "col": 2
            },
            "12707b10-82f8-733e-fd48-5a1a56262436": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 2,
              "col": 22
            },
            "26add815-f5ac-a44b-0286-1e03071578be": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 20
            },
            "2ef84005-4f64-1f65-df61-5bdcaaf020b4": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 16
            },
            "fba5659c-69b4-965c-4dac-93d354de0757": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 18
            },
            "1c3ca1b4-0720-3c10-82e1-4bfec26c90db": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 22
            },
            "f9f56c6a-9921-95e2-592b-694c7a4b7ad2": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 4,
              "col": 22
            },
            "15ca4f90-a52f-d1e2-d4b6-7991c085713f": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 6,
              "col": 22
            },
            "ab5adaed-2fa2-ae87-3c6e-aae267d16b51": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 0
            },
            "a61291e5-8f56-1bf4-4887-a5a4b1b4ee37": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 3
            },
            "18bcccfb-5fbf-d103-0755-5ad2f422a227": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 6
            },
            "12376b84-cee8-d02a-b4fa-ac048d73609c": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 9
            },
            "ac445316-9511-a4e8-6fec-116935d1f061": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 15
            },
            "77d74b50-9552-6be0-adc7-6f3e51db099f": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 0
            },
            "78e7c33a-7728-af7f-5bac-76a0154f0d2b": {
              "sizeX": 4,
              "sizeY": 1,
              "row": 0,
              "col": 5
            },
            "c20c8392-b569-5d1b-d084-39bc487e8d11": {
              "sizeX": 4,
              "sizeY": 1,
              "row": 1,
              "col": 5
            },
            "a9f3041a-394a-1266-7e32-35e8281792c4": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 12
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
            "backgroundSizeMode": "100%"
          }
        }
      }
    },
    "PRVC": {
      "name": "PRVC",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {
            "1a6c8c6a-6c37-19ad-8bca-292ee71f20c4": {
              "sizeX": 22,
              "sizeY": 4,
              "mobileHeight": null,
              "row": 2,
              "col": 0
            },
            "065d514a-517c-8669-7411-27f12a1a75b5": {
              "sizeX": 22,
              "sizeY": 4,
              "mobileHeight": null,
              "row": 6,
              "col": 0
            },
            "8564c390-f48c-85bb-a6e5-dc3d92619cc8": {
              "sizeX": 4,
              "sizeY": 2,
              "row": 10,
              "col": 20
            },
            "b6837c1d-c9e6-82d2-2758-4491f2f4e75e": {
              "sizeX": 3,
              "sizeY": 2,
              "row": 0,
              "col": 2
            },
            "12707b10-82f8-733e-fd48-5a1a56262436": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 2,
              "col": 22
            },
            "26add815-f5ac-a44b-0286-1e03071578be": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 20
            },
            "2ef84005-4f64-1f65-df61-5bdcaaf020b4": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 16
            },
            "fba5659c-69b4-965c-4dac-93d354de0757": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 18
            },
            "1c3ca1b4-0720-3c10-82e1-4bfec26c90db": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 22
            },
            "f9f56c6a-9921-95e2-592b-694c7a4b7ad2": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 4,
              "col": 22
            },
            "15ca4f90-a52f-d1e2-d4b6-7991c085713f": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 6,
              "col": 22
            },
            "ab5adaed-2fa2-ae87-3c6e-aae267d16b51": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 0
            },
            "a61291e5-8f56-1bf4-4887-a5a4b1b4ee37": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 3
            },
            "18bcccfb-5fbf-d103-0755-5ad2f422a227": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 6
            },
            "12376b84-cee8-d02a-b4fa-ac048d73609c": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 9
            },
            "ac445316-9511-a4e8-6fec-116935d1f061": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 15
            },
            "77d74b50-9552-6be0-adc7-6f3e51db099f": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 0
            },
            "78e7c33a-7728-af7f-5bac-76a0154f0d2b": {
              "sizeX": 4,
              "sizeY": 1,
              "row": 0,
              "col": 5
            },
            "c20c8392-b569-5d1b-d084-39bc487e8d11": {
              "sizeX": 4,
              "sizeY": 1,
              "row": 1,
              "col": 5
            },
            "ae660bd3-dfcd-9bc2-50d9-77ea6622bc26": {
              "sizeX": 3,
              "sizeY": 3,
              "row": 10,
              "col": 12
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
            "backgroundSizeMode": "100%"
          }
        }
      }
    }
  },
  "entityAliases": {
    "ead3636d-a7da-bfeb-d34e-be6e79df5c25": {
      "id": "ead3636d-a7da-bfeb-d34e-be6e79df5c25",
      "alias": "MVDevice",
      "filter": {
        "type": "deviceType",
        "resolveMultiple": true,
        "deviceType": "default",
        "deviceNameFilter": "MVDeviceXXX"
      }
    }
  },
  "timewindow": {
    "realtime": {
      "interval": 1000,
      "timewindowMs": 30000
    },
    "aggregation": {
      "type": "NONE",
      "limit": 25000
    },
    "hideInterval": false,
    "hideAggregation": false,
    "hideAggInterval": false
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
}
';
?>
