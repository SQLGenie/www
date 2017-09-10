<?php
//Test connection
 
$servername = "localhost";
$username = "root";
$password = "";
$database = "logintest";

$conn = new mysqli($servername, $username, $password, $database);
mysqli_select_db($conn, $database);


$conn->close();
?> 




