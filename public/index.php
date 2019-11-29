<?php

include __DIR__ . '/../functions.php';

// Идея использования маршрутизатора | router для редиректа запросов

$routes = [
    "/" => 'functions/homepage.php',
    "/about" => 'functions/about.php'
];

$route = $_SERVER['REQUEST_URI'];

if(array_key_exists($route, $routes)) {
    include __DIR__ . '/../' . $routes[$route];
    exit;
} else {
    dd(404);
}

?>