<?php
$act="class='active'";
function actclass()
{	
	if ($_SERVER['PHP_SELF']=='/test/index.php') 
		return 1;
	else if($_SERVER['PHP_SELF']=='/test/academics.php')
		return 2;
	else if ($_SERVER['PHP_SELF']=='/test/contactus.php') 
		return 3;
	else
		return "";
}
?>
<div style="width:100%;">
				<ul class="menu">
					<li class="submenu"><a <?php if (actclass()==1) echo $act; ?> href="index.php">Home</a></li>
					<li class="submenu"><a <?php if (actclass()==2) echo $act; ?> href="academics.php">Academics</a></li>
					<li class="submenu"><a <?php if (actclass()==3) echo $act; ?> href="contactus.php">Contacts</a></li>
				</ul></div>
				<div style="clear: both;"></div>