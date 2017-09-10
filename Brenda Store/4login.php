
<?Php
session_start();
?>



<?php

if (isset($_SESSION['id'])) {
	  echo $_SESSION['id'];
	} else {
		echo "You are not logged in!";
	}
	?>
<BR><BR><BR>

<?php	
include 'testphp.php';

if(isset($_POST['SU_submit'])) {

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

			header("Location: Login-index.php");
		} else {
			echo "ERRORS";
		}

	}
//header("Location: login.php");

?>
 