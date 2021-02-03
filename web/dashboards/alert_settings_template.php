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
 * Brief: This JSON file represents an alarm settings template file to build up
 *			a dashboard to set alarm settings.
 *
 */

{
  "widgets": {
    "6931387b-ed9d-aedc-6c00-675c4f2575f1": {
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
          "locationID": "1"
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
          "ce7edab0-2edc-a8e3-a3ed-f75e8453863e"
        ],
        "actions": {}
      },
      "id": "6931387b-ed9d-aedc-6c00-675c4f2575f1"
    },
    "f296304e-630d-54e2-dec4-4dc5aad82b21": {
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
          "ce7edab0-2edc-a8e3-a3ed-f75e8453863e"
        ]
      },
      "id": "f296304e-630d-54e2-dec4-4dc5aad82b21"
    },
    "ca89d047-297e-aff2-846b-5e7e0391bddb": {
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
          "ce7edab0-2edc-a8e3-a3ed-f75e8453863e"
        ]
      },
      "id": "ca89d047-297e-aff2-846b-5e7e0391bddb"
    },
    "ae61d6f0-681b-f218-ec2b-47762462f059": {
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
          "ce7edab0-2edc-a8e3-a3ed-f75e8453863e"
        ]
      },
      "id": "ae61d6f0-681b-f218-ec2b-47762462f059"
    },
    "2e1ddbba-74d9-81b1-a038-e7702ce269fb": {
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
          "ce7edab0-2edc-a8e3-a3ed-f75e8453863e"
        ]
      },
      "id": "2e1ddbba-74d9-81b1-a038-e7702ce269fb"
    },
    "1b61b91b-300c-7be0-d94d-bcdf288807e9": {
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
          "ce7edab0-2edc-a8e3-a3ed-f75e8453863e"
        ]
      },
      "id": "1b61b91b-300c-7be0-d94d-bcdf288807e9"
    },
    "ed93b78d-00fd-e03f-c686-e15dcc324f7e": {
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
          "ce7edab0-2edc-a8e3-a3ed-f75e8453863e"
        ]
      },
      "id": "ed93b78d-00fd-e03f-c686-e15dcc324f7e"
    },
    "4eb05e64-cea8-fc45-247b-330f4d0807a0": {
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
      "id": "4eb05e64-cea8-fc45-247b-330f4d0807a0"
    },
    "074c1353-6f5c-c799-d397-781949bc5c3d": {
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
          "ce7edab0-2edc-a8e3-a3ed-f75e8453863e"
        ]
      },
      "id": "074c1353-6f5c-c799-d397-781949bc5c3d"
    },
    "8d5f4c68-a02f-0e28-fb3b-c5f9e137300f": {
      "isSystemType": false,
      "bundleAlias": "massventil_widgets",
      "typeAlias": "roundbar2",
      "type": "rpc",
      "title": "New widget",
      "sizeX": 5,
      "sizeY": 4.5,
      "config": {
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
        "targetDeviceAliases": [],
        "datasources": [],
        "targetDeviceAliasIds": [
          "ce7edab0-2edc-a8e3-a3ed-f75e8453863e"
        ]
      },
      "id": "8d5f4c68-a02f-0e28-fb3b-c5f9e137300f"
    }
  },
  "states": {
    "alarmsettings1": {
      "name": "AlarmSettings",
      "root": true,
      "layouts": {
        "main": {
          "widgets": {
            "6931387b-ed9d-aedc-6c00-675c4f2575f1": {
              "sizeX": 8,
              "sizeY": 2,
              "row": 0,
              "col": 0
            },
            "f296304e-630d-54e2-dec4-4dc5aad82b21": {
              "sizeX": 5,
              "sizeY": 3,
              "row": 2,
              "col": 7
            },
            "ca89d047-297e-aff2-846b-5e7e0391bddb": {
              "sizeX": 5,
              "sizeY": 3,
              "row": 2,
              "col": 16
            },
            "ae61d6f0-681b-f218-ec2b-47762462f059": {
              "sizeX": 5,
              "sizeY": 3,
              "row": 5,
              "col": 7
            },
            "2e1ddbba-74d9-81b1-a038-e7702ce269fb": {
              "sizeX": 5,
              "sizeY": 3,
              "row": 5,
              "col": 16
            },
            "1b61b91b-300c-7be0-d94d-bcdf288807e9": {
              "sizeX": 5,
              "sizeY": 3,
              "row": 8,
              "col": 7
            },
            "ed93b78d-00fd-e03f-c686-e15dcc324f7e": {
              "sizeX": 5,
              "sizeY": 3,
              "row": 8,
              "col": 16
            },
            "4eb05e64-cea8-fc45-247b-330f4d0807a0": {
              "sizeX": 2,
              "sizeY": 2,
              "row": 0,
              "col": 13
            },
            "074c1353-6f5c-c799-d397-781949bc5c3d": {
              "sizeX": 10,
              "sizeY": 1,
              "row": 11,
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
            "backgroundSizeMode": "100%",
            "autoFillHeight": false,
            "mobileAutoFillHeight": false,
            "mobileRowHeight": 70
          }
        }
      }
    },
    "alarmsettings2": {
      "name": "AlarmSettings2",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {
            "8d5f4c68-a02f-0e28-fb3b-c5f9e137300f": {
              "sizeX": 5,
              "sizeY": 4,
              "row": 0,
              "col": 0
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
    "alarmsettings3": {
      "name": "AlarmSettings3",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings4": {
      "name": "AlarmSettings4",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings5": {
      "name": "AlarmSettings5",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings6": {
      "name": "AlarmSettings6",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings7": {
      "name": "AlarmSettings7",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings8": {
      "name": "AlarmSettings8",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings9": {
      "name": "AlarmSettings9",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings10": {
      "name": "AlarmSettings10",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings11": {
      "name": "AlarmSettings11",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings12": {
      "name": "AlarmSettings12",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings13": {
      "name": "AlarmSettings13",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings14": {
      "name": "AlarmSettings14",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings15": {
      "name": "AlarmSettings15",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings16": {
      "name": "AlarmSettings16",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings17": {
      "name": "AlarmSettings17",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings18": {
      "name": "AlarmSettings18",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings19": {
      "name": "AlarmSettings19",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings20": {
      "name": "AlarmSettings20",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings21": {
      "name": "AlarmSettings21",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings22": {
      "name": "AlarmSettings22",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings23": {
      "name": "AlarmSettings23",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings24": {
      "name": "AlarmSettings24",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "alarmsettings25": {
      "name": "AlarmSettings25",
      "root": false,
      "layouts": {
        "main": {
          "widgets": {},
          "gridSettings": {
            "backgroundColor": "#eeeeee",
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
    "ce7edab0-2edc-a8e3-a3ed-f75e8453863e": {
      "id": "ce7edab0-2edc-a8e3-a3ed-f75e8453863e",
      "alias": "MVDevice1",
      "filter": {
        "type": "deviceType",
        "resolveMultiple": true,
        "deviceType": "default",
        "deviceNameFilter": "MVDevice1"
      }
    }
  },
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
        "startTimeMs": 1588171865229,
        "endTimeMs": 1588258265229
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
}
