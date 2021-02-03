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
 * Brief: This PHP script file contains functions to manage assignments.
 *		An assignment is a relation between locations and devices, where
 *		a location are connected to exactly one device, but several device
 *		could be connected to dashboards ===> N:1 and 1:N relation.
 *
 */

<?php

include ('../database/database_wrapper.php');

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

if (isset($_GET['getAssignments']))
{
  //$params = array('name' => $_GET['newDeviceName']);
  echo json_encode(dbw_getAssignments(null));
  die;
}

if (isset($_GET['getListOfDevices']))
{
  //$params = array('name' => $_GET['newDeviceName']);
  echo json_encode(dbw_getListOfDevices(null));
  die;
}

if (isset($_GET['modifyPatient']))
{
  $params = array('patient_id' => $_GET['patient_id'], 'location_id' => $_GET['location_id'], 'device_id' => $_GET['device_id']);
  //echo json_encode(dbw_getListOfDevices(null));
  //echo "ok this: pid:" . $_GET['patient_id'] . " lid:" . $_GET['location_id'] . " did:" . $_GET['device_id'];
  echo dbw_updateAssignments($params);
  die;
}

?>
