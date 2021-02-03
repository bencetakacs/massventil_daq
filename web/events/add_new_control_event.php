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
 * Brief: This PHP script file contains functions to create control events. 
 *		Control events are actions when the administrator (surgeon, surse, etc.)
 *		changes one of the ventilation parameters.
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

if (isset($_GET['controlParameters']) && isset($_GET['userId']))
{
  $string = $_GET['userId'];
  $firstPartOfID = strtok($string, "-");
  $secondPartOfID = strtok("-");
  $thirdPartOfID = strtok("-");
  $fourthPartOfID = strtok("-");
  $fivethPartOfID = strtok("-");

  $realUserID = substr($thirdPartOfID, 1) . $secondPartOfID . $firstPartOfID . $fourthPartOfID . $fivethPartOfID;

  $decodedControlParametersJSON = json_decode($_GET['controlParameters']);

  print_r($decodedControlParametersJSON);

  $something = array(
    'parameters' => $_GET['controlParameters'],
    'user_id' => $realUserID
  );

  echo dbw_addNewControlEvent($something);
}
else
{
  echo 'NOT OK';
}


?>
