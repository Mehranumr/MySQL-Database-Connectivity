<?php

/**
 * mySQL database connectivity
 *
 *
 * PHP version 5*
 *
 * LICENSE: This source file is subject to version 5 of the PHP license
 * If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to mehranumr@gmail.com so i can mail you a copy immediately.
 *
 * @category   mySQL
 * @package    Database Connectivity
 * @author     Original Author <mehranumr@gmail.com>
 * @copyright  2017-mehranumr
 * @since      File available since Release 0.1
 * @deprecated File deprecated in Release 0.2
 */

//initializing database params

$servername = "localhost";
$username = "root";
$password = "";
$db_name="nbp_data"; // Database name 
$status;

// Creating connection

$conn = mysql_connect($servername, $username, $password);
mysql_select_db($db_name)or die("cannot select DB");

// Check connection if succesful or not?

if (mysqli_connect_errno())
{
	echo "unable to connect!";
}else{
	echo "Database is Connected";
}

?>