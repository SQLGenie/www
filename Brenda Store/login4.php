
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

<FORM action="login3.php" method="POST">
	<input type="text" name="uid" placeholder="username">
	<input type="password" name="pwd" placeholder="password">
	<button type="submit">LOGIN</button>
</form>


<BR><BR><BR>
	


<?php			
include('dbh.php');


$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
if(isset($_POST['submit'])) {
	
	
$sql= "SELECT * FROM user WHERE UID= '$uid' AND PWD='$pwd'"; 
$result = $conn->query($sql);

//!$result= mysqli_fetch_assoc($conn,$sql);
$resultCheck = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

if (!$row=$result->fetch_assoc()) {
	ECHO "Your username or password is incorrect!";
} else {
	$_SESSION['id']=$row['id'];

}	
	
header("Location: login4.php");
}

?>

