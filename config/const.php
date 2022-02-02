<?php
// start ssession
session_start();

// create constants to store non repeatung values
define('SITEURL', 'http://localhost/nikonet-admin/');
define('SITEURL2', 'http://localhost/nikonet.ug/frontfiles');

define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'nikonet');





// execute the query and save in database

$conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error()); //database connection

$db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error());//selecting database


?>
