
 <?php

 
require_once('dbh.php');
if(isset($id)){}
	$id=filter_input(INPUT_GET, 'id',
	FILTER_VALIDATE_INT);
	if ($id==NULL||$id ==FALSE){
		$id=1;
	}
 ?>

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
	