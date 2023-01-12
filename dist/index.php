<?php

$url =  '/' . trim($_SERVER['REQUEST_URI'], '/');
$uri = parse_url($url, PHP_URL_PATH);

$routes = require 'routes.php';

$views_dir = dirname(__DIR__) . '/src/views/';
$title = "";

if (key_exists($uri, $routes)) {
    $view = $views_dir . $routes[$uri]['view'];
    if (!is_readable($view)){
        $title = "505 - Ismail Bourbie";
        require_once($views_dir  . "500.php");
    }
    else {
        $title = $routes[$uri]['title'];
        require_once($view);
    }
} else
    $title = "404 - Ismail Bourbie";
    require_once($views_dir . "404.php");
