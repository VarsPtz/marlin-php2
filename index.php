<?php
include 'functions.php';
include 'database/start.php';
$posts = $db->getAll();

//$posts = getAllPosts($pdo);
//$users = getAllusers($pdo);

//4. Вывести через foreach
include 'index.view.php';
?>

