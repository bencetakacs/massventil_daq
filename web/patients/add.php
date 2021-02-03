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
 * Brief: This PHP script file contains functions to add patients into the system
 *		and change the patient data later. It does not contain any patient related
 *		sensitive data, only ones which are related to set the ventilation configuration.
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

$getTitleParams = array(
   'short_name' => 'new_patient_title'
);

$something = array(
   'id' => 'ezittazid_2',
   'location_id' => '5',
   'device_id' => '6',
   'age' => '42',
   'height' => '190',
   'weight' => '90',
   'gender' => 'm'
);

if (isset($_GET['addNewPatient']))
{
  $params = array(
	'id' => $_GET['id'],
	'age' => $_GET['age'],
	'gender' => $_GET['gender'],
	'weight' => $_GET['weight'],
	'height' => $_GET['height'],
	'device_id' => $_GET['device_id'],
	'location_id' => $_GET['location_id'],
	'timestamp' => $_GET['timestamp']
  );
  echo dbw_addPatient($params);
}

if (isset($_GET['updatePatient']))
{
  $params = array(
	'id' => $_GET['id'],
	'age' => $_GET['age'],
	'gender' => $_GET['gender'],
	'weight' => $_GET['weight'],
	'height' => $_GET['height'],
	'device_id' => $_GET['device_id'],
	'location_id' => $_GET['location_id'],
	'timestamp' => $_GET['timestamp']
  );
  echo dbw_updatePatient($params);
}

?>
