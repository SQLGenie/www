
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
<ul>
	<li><a href="index.php">HOME</a></li>
	<li><a href="contact.php">CONTACT</a></li>

</ul>


<?Php
$_SESSION['username']="brenda";
echo $_SESSION['username']="Brenda";

if (!isset($_SESSION['username'])) {
	echo " please login, You are not logged in";
} else {
 	 echo " Welcome, you are logged in!";
}

?>
</body>
</html>



