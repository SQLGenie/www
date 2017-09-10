
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

<FORM action="login.php" method="POST">
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

<?php
include 'dbh.php';

if(isset($_POST['submit'])) {

		$first = $_POST['first'];
		$last = $_POST['last'];
		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];

$sql= "SELECT * FROM user WHERE uid= '$uid' AND pwd='$pwd'"; 
$result = mysqli_query($conn,$sql);
$resultCheck=mysql_num_rows($result);
if($resultCheck >0){

	$row=mysqli_fetch_assoc($result);
	$_SESSION['id'];
	$_SESSION['first'] = $row['first'];

!$result= mysqli_fetch_assoc($conn,$sql);
!$row = mysqli_fetch_assoc($result);

//fetch datafrom profile image

			$sql = "SELECT * FROM profileImg WHERE userid= '".$_SESSION['id']."' ";

			$result = mysqli_query($conn, $sql);

			$row = mysqli_fetch_assoc($result);

			$_SESSION['status'] = $row['status'];

			header("Location: index.php");
		} else {
			echo "ERRORS";
		}

	}
//header("Location: login.php");

?>
 