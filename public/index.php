<?php
//include __DIR__ . '/../functions.php';
include __DIR__ . '/../functions.php';

$db = include __DIR__ . '/../database/start.php';
$posts = $db->getAll('posts');
include __DIR__ . '/../index.view.php';

// Идея использования маршрутизатора | router для редиректа запросов
//dd($_SERVER);
//$routes = [
//    "/" => 'functions/homepage.php',
//    "/about" => 'functions/about.php',
//    "/create" => 'create.php',
//    "/store" => 'store.php'
//];
//$route = $_SERVER['REQUEST_URI'];
//if(array_key_exists($route, $routes)) {
//    include $routes[$route];
//    exit;
//} else {
//    dd(404);
//}
?>