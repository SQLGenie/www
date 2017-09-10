
<?Php
session_start();
?>


<?php

  //query database

include('Adbh.php');

//takes user account infomation and enters into "user" database
if(isset($_POST['SU_submit'])){

  $first = $_POST['first'];
  $last = $_POST['last'];
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];

  //Insert into daabase

  $sql = "INSERT INTO user (first, last, uid, pwd)
          VALUES ('$first', '$last', '$uid', '$pwd')";
  $result = mysqli_query($conn, $sql);
}
    header("Location: login-index.html");
?>

