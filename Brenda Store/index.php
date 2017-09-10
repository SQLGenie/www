
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
<div class="content">
        <form action="login.php">
            <input type="text" name="uid" placeholder="Username"><br>
            <input type="password" name="pwd" placeholder="Password"><br>
            <button type="submit">LOG IN</button>
            <br><br><br>
        </form>
<body>
	
<FORM action="signup2.php" method="POST">
	<input type="text" name="first" placeholder="Firstname">
	<input type="text" name="last" placeholder="lastname">
	<input type="text" name="uid" placeholder="username">
	<input type="password" name="pwd" placeholder="password">
	<button type="submit">SIGN UP</button>
</FORM>







 
</body>
</html>