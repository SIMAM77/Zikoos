<?php 
require_once "connect.php";
	function secureGet($array) 
{
	foreach ($array as $key => $value) {
		$array[$key] = htmlspecialchars($value);
	}
	return $array;
};
	if(isset($_POST)){
		secureGet($_POST);
	}

	
		
	$sql = "INSERT INTO `content`
	(`commentaire`, `type`, `band`, `guitar1`, `bass`, `drum`, `amp`)
	VALUES 
	(:commentaire, :type, :band, :guitar1, :bass, :drum, :amp);";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':type', 'Pop', PDO::PARAM_STR);
	$stmt->bindValue(':band', $_POST['band'], PDO::PARAM_STR);
	$stmt->bindValue(':guitar1', $_POST['guitar1'], PDO::PARAM_STR);
	$stmt->bindValue(':bass', $_POST['bass'], PDO::PARAM_STR);
	$stmt->bindValue(':drum', $_POST['drum'], PDO::PARAM_STR);
	$stmt->bindValue(':amp', $_POST['amp'], PDO::PARAM_STR);
	$stmt->bindValue(':commentaire', $_POST['commentaire'], PDO::PARAM_STR);
	$stmt->execute();

	header('Location: groupes2.php');