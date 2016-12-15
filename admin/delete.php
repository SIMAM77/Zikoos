<?php
require_once "connect.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
} else {
    header('Location: index.php');
}
$sql = "DELETE FROM
    `content` 
WHERE 
  id = :id
;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
header('Location: index.php');