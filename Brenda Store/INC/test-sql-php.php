
 <?php

 
   $dsn = 'mysql:host=localhost;  $dbname= logintest'; 
   $username = "root";
   $password = "";

  $db= new PDO($dsn, $username, $password);

$query ="Select * from user";
$statement = $db->prepare($query);
$statement->execute();
?>

<?php foreach ($id as $ids) : ?>
<div id="header">
<h1><strong>This is the information you submitted</h1></strong>
</div>
<div id="Main">
<table>
<tr> 
<td>First:</td>

</tr>
    <td><?php echo $id ['id'] ; ?></td>
	<td><?php echo $First ['First'] ; ?></td>
	<tr> 
</table>
</div>



<?php endforeach;  ?>