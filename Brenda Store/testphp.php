


 <?php

 //Connect to database
require_once('2dbh.php');

//query database

$queryAllnames = 'SELECT * FRom user 
 ORDER by First';
 $statement1 =$db->prepare($queryAllnames);
 $statement1 ->execute();
 //$ids =$statement2->fetchAll(); 
 $firsts=$statement1->fetchAll();
 $statement1->closeCursor();
?>

<!--PASS results to HTML -->
<DOCTYPE html>
	<meta charset="UTF-8">
<title>Title of the doc</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
</head>
<title>Test connect</title>
</head>

            <br><br><br>
<body>
	<header> <h1>User id</h1></header>
	<nav>
		<ul>
<!-- dispay variable passed from db into html -->			
<?php foreach ($firsts as $first) : ?>
	<li> <a href=".?first=<?Php echo $first['first']; ?>">
<?php echo $first['first'];?>



	</a>
</li>
<?Php endforeach; ?>
