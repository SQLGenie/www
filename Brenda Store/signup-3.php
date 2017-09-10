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

 		
 		<input type='text' name='first' placeholder='First Name'>
 		<input type='text' name='last' placeholder='Last Name'>
 		<input type='text' name='uid' placeholder='Username'>
 		<input type='password' name='pwd' placeholder='password'>
 		<button type='submit' name='submit'>Signup</button>
 </form>
</form>

<?php
if (isset($_SESSION['id'])) {
	  echo $_SESSION['id'];
	} else {
		echo "You are not logged in!";
	}
	?>
<BR><BR><BR>
	


<?php


if(isset($_POST['submit'])) {	

include 'testingphp.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$SQL= "INSERT INTO user (first, last, uid, pwd)
 VALUES ('$first', '$last','$uid','$pwd')";
$result = $conn->query($sql);
}
{}

//header("Location: index.php");

?>