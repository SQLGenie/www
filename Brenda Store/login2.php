
<?Php
session_start();
?>

<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>Title of the doc</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
</head>
<body>

<FORM action="login2.php" method="POST">
	<input type="text" name="uid" placeholder="username">
	<input type="password" name="pwd" placeholder="password">
	<button type="submit">LOGIN</button>
</form>

<?php
if (isset($_SESSION['id'])) {
	  echo $_SESSION['id'];
	} else {
		echo "You are not logged in!";
	}
	?>
<BR><BR><BR>
	

	<input type="text" name="first" placeholder="Firstname">
	<input type="text" name="last" placeholder="lastname">
	<input type="text" name="uid" placeholder="username">
	<input type="password" name="pwd" placeholder="password">
	<button type="submit">SIGN UP</button>
</FORM>

<BR><BR><BR>

<form action="logout.php";
	<button> LOG OUT<button>
		<form>
			</form>
<?php

	$dsn ='mysql:host=localhost;dbname=logintest';

	$username = 'root';

	$password = '';

	 $db = new PDO($dsn, $username, $password);


if($db) {
	die("Connection Failed ".mysqli_connect_error());
} 



//$uid = $_POST['uid'];
//$pwd = $_POST['pwd'];
if(isset($_POST['submit'])) {

	$first = $_POST['first'];	
	$last = $_POST['last'];	
	$uid = $_POST['uid'];	
	$pwd = $_POST['pwd'];	
	

$sql= "SELECT * FROM user WHERE UID= '$uid' AND PWD='$pwd'"; 
$result = $db->query($sql);

//!$result= mysqli_fetch_assoc($conn,$sql);
$row = mysqli_fetch_assoc($result);

if (!$row=$result->fetch_assoc()) {
	ECHO "Your username or password is incorrect!";
} else {
	$_SESSION['id']=$row['id'];

}	
	
header("Location: login2.php");
}

?>
