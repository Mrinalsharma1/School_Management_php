<?php
	session_start(); //Database connection
	$dbname = 'sms';
	$host = 'localhost';
	$username = 'root';
	$password = '';

	$conn = mysqli_connect($host,$username,$password,$dbname);

	if(!$conn){
		echo 'Connection Error '.mysqli_error($conn);
	}

?>