<?php

include 'dbh.php';

if(issit($_POST['submit'];

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$SQL= "INSERT INTO user (first, last, uid, pwd)
 VALUES ('$first', '$last','$uid','$pwd')";
$result= mysqli_query($conn,$sql);
!$row = mysqli_num_rows($result);

header("Location: login.php");

