<?php

$routes = require 'routes.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
redirectToNexPage($path, $routes);






function redirectToNexPage($path, $routes){
  if(array_key_exists($path, $routes)){
    require $routes[$path];
  }else{
    echo '404 Not Found';
  }
  
}
?>