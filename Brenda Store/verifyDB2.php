


Result Size: 452 x 407

<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logintest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection


mysqli_select_db($conn, $dbname);
$sql = "SELECT * FROM user ";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
	echo "<br> id: ". $row["id"]. " - first: ". $row["first"] ."<br>";
  

?> 

</body>
</html>