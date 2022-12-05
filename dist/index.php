<?php

$url =  '/' . trim($_SERVER['REQUEST_URI'], '/');

$uri = parse_url($url, PHP_URL_PATH);
// require_once($file);
$routes = [
    "/" => "home.php",
    "/home" => "home.php",
    "/about" => "about.php",
    "/work" => "work.php",
    "/contact" => "contact.php"
];

if (key_exists($uri, $routes))
    echo $routes[$uri];
else
    echo '404 - Not Found';
