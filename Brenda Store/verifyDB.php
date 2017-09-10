
<?php
//verifyDB.php

//query database


//Test connection
 
$servername = "localhost";
$username = "root";
$password = "";
$database = "logintest";

try {
    $conn = new PDO("mysql:host=$servername;dbname=logintest", $uid, $pwd);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }




//connect and chek for errors
@$dbc =mysqli_connect($servername, $username , $password , $database);

$connection_error = $dbc->connect_error;
if ($connection_error != null) {
	echo "<p>Error connecting to database: $connection_error</p>";
	exit();

}
?>
 <!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname  FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>