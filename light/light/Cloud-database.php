
<?php
$dsn= 'mysql:host=10539712;dbname=Fey';
//$dsn='mysql:host=localhost;dbname=logintest';
$username='root';
$password='';
$database='Fey';
//$database='logintest';

$options= array (PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION);

try {
	$conn= new PDO($dsn, $username, $password, $options);
}catch (PDOException $e) {
   $error_message = $e->getmessage();
   include 'errors/db_error_connect.php';
   exit;

}
//$conn=new PDO("mysql:host=$server;dbname=$database;", $username, $password );



?>
