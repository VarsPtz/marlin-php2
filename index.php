<?php
include 'functions.php';
include 'database/QueryBuilder.php';
include 'database/Connection.php';


$connnection = new Connection;
$pdo = $connnection->make();

$db = new QueryBuilder($pdo);
$posts = $db->getAll();

//$posts = getAllPosts($pdo);
//$users = getAllusers($pdo);

//4. Вывести через foreach
include 'index.view.php';
?>

