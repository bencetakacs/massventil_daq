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
 * Brief: This PHP script file contains wrapper functions to set the actual language of the system.
 *
 */

<?php

include ('../database/database_wrapper.php');

if (isset($_GET['languageDropDown']))
{
  echo "Current language_code is " . $_GET['languageDropDown'];

  $something = array('language_code' => $_GET['languageDropDown']);
  dbw_setLanguage($something);
  dbw_refreshDashboardsAndWidgetsLanguage($something);

}

echo '
<form action="change_language.php">
  <select id="languageDropDown" name="languageDropDown">
    <option value="en">English</option>
    <option value="de">German</option>
    <option value="hu">Hungarian</option>
  </select>
  <input type="submit" value="Submit">
</form>
';




?>




