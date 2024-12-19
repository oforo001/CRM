<?php

$routes = require 'routes.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

redirectToNexPage($path, $routes);

function redirectToNexPage($path, $routes){
    if (array_key_exists($path, $routes)) {
        // for debug : echo $path;
        require $routes[$path];

    } else {
        require 'View/404.view.php';
    }
}