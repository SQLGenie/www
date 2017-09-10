<?php



	$server = "localhost";

	$username = "root";

	$password = "";

	$database = "logintest";
	//connect to database



	$conn = mysqli_connect($server, $username, $password, $database);



	if(!$conn) {

		die("Connection Failed ".mysqli_connect_error());

	} 

 ?>