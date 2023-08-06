<?php
	session_start();
	include("./phptextClass.php");	
	
	/*create class object*/
	$phptextObj = new phptextClass();	
	/*phptext function to genrate image with text*/
	$phptextObj->phpcaptcha('#ffff00','#00ff00',120,40,10,25);	
	/*$phptextObj->phpcaptcha('#0000ff','#f2d12b',120,40,10,25);*/	
 ?>