<?php
	$host='localhost';
	$username = "root";
	$password = "";
	/*$servername = "";*/
	$dbname = "byteme";
	
	$con = mysqli_connect($host,$username,$password,$dbname) or die("\n Connection Failed !" . $con->connect_error);
?>