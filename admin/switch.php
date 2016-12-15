<?php

require_once("connect.php");
if (isset($_GET['id'])) {
	$id=$_GET['id'];
}


$sql = "UPDATE 
`content` 
SET 
  `visible` = :visible
WHERE 
id = :id";
$stmt = $pdo->prepare($sql);
if ($_GET['visible']=0) {
	$stmt->bindValue(':visible', 1, PDO::PARAM_INT);
}else{
	$stmt->bindValue(':visible', 0, PDO::PARAM_INT);
}
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
header('Location: index.php');

?>