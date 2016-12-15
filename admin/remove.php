<?php  
require_once "../connect.php";
secureGet($_POST);
$sql = "UPDATE 
`content` 
SET 
`id`,
`type`,
`band`,
`guitar1`,
`bass`,
`drum`,
`amp`,
`commentaire`
WHERE 
id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
$stmt->bindValue(':type', $_POST['type'], PDO::PARAM_STR);
$stmt->bindValue(':band', $_POST['band'], PDO::PARAM_STR);
$stmt->bindValue(':guitar1', $_POST['guitar1'], PDO::PARAM_STR);
$stmt->bindValue(':bass', $_POST['bass'], PDO::PARAM_STR);
$stmt->bindValue(':drum', $_POST['drum'], PDO::PARAM_STR);
$stmt->bindValue(':amp', $_POST['amp'], PDO::PARAM_STR);
$stmt->bindValue(':commentaire', $_POST['commentaire'], PDO::PARAM_STR);
$stmt->execute();
header('Location: details.php?id='.$_POST['id']);

?>