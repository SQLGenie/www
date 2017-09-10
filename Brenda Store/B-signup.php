
<?Php
session_start();
?>

<!DOCTYPE html>


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
?>
<?php
//query database

include '2dbh.php';
 
$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
 
if(isset($_POST['submit']))    
{
  if(mysqli_query($db,"insert into user values('$first','$last','$uid','$pwd')"))
{
  
  echo"data insert";
}
}
 
?>

        