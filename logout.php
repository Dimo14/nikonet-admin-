<?php
// iclude constants.php
include 'config/const.php';
// Destroy session
session_destroy();//to stop $_session
// redirect to login page
header('LOCATION:'.SITEURL.'login.php')
?>