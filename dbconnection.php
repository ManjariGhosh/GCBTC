<?php function connectdb () {
	static $link;
	$serverName="localhost";
	$dbusername="root";
	$dbpassword="";
	$database="gcbt_college";
	$db_port='3306';
	if ($link===NULL){ 
		$link = mysqli_connect($serverName,$dbusername,$dbpassword,$database,$db_port);
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
	}
  	return $link;
}
$link=connectdb();
?>