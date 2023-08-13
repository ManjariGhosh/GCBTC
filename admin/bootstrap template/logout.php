<?php
ini_set('display_errors', 'Off');
session_start();
date_default_timezone_set('Asia/Kolkata');
include('lib/date.php');
include('dbconnection.php');
$link = connectdb(); 
$_SESSION['Login'] = "No";
$_SESSION['UserName'] = "";
echo "<meta http-equiv='refresh' content='0;url=index.php'>";
exit;
?>