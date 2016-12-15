<?php
try{
    $pdo = new PDO('mysql:dbname=zikoos;host=localhost;port=8889','root','root');
} catch(PDOException $exception) {
    die($exception->getMessage());
}
$pdo->exec("SET NAMES UTF8");
