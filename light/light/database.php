
<?php
$server= 'localhost';
$username='root';
$password='';
$database='logintest';
//$conn = new mysqli($server, $username, $password);

$conn=new PDO("mysql:host=$server;dbname=$database;", $username, $password );


?> 


