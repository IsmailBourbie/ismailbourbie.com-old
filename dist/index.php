<?php

$url =  '/' . trim($_SERVER['REQUEST_URI'], '/');
$uri = parse_url($url, PHP_URL_PATH);

$routes = require 'routes.php';

$views_dir = dirname(__DIR__) . '/src/views/';


if (key_exists($uri, $routes)) {
    $view = $views_dir  . $routes[$uri];
    if (!is_readable($view))
        require_once($views_dir  . "500.php");
    else
        require_once($views_dir  . $routes[$uri]);
} else
    require_once($views_dir . "404.php");
