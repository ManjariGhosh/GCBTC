<?php
ini_set('display_errors', 'Off');
session_start();
date_default_timezone_set('Asia/Kolkata');
include('lib/date.php');
include('dbconnection.php');
$link = connectdb();
$_SESSION['Login'] = 'No';
$_SESSION['UserName'] = 'ABC';
$QueryPwd="Pwd";
$UName=$_POST["UserName"];
$UPwd=$_POST["Password"];
if($UName=="")
{
$message="User Name ";
}
if($UPwd=="")
{
$message=$message."and Password ";
}
if($message!="")
{
echo "<meta http-equiv='refresh' content='0;url=index.php?id=2'>";
exit;
}

$query = "SELECT PasswordD FROM userdetails where UserNameD='".$UName."'";
$data = mysqli_query($link,$query) or die("<meta http-equiv='refresh' content='0;url=index.php?id=3'>");
if($info = mysqli_fetch_array( $data ))
{
$QueryPwd=$info['PasswordD'];
}
if($QueryPwd==$UPwd)
{
$_SESSION['Login'] = 'Yes';
$_SESSION['UserName'] = $UName;
echo "<meta http-equiv='refresh' content='0;url=dashboard.php'>";
exit;
}
else
{
echo "<meta http-equiv='refresh' content='0;url=index.php?id=1'>";
exit;
}

?>
