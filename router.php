<?php

$routes = require 'routes.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//dd($path);
redirectToNexPage($path, $routes);






function redirectToNexPage($path, $routes){
  if(array_key_exists($path, $routes)){
    echo $path;
    require $routes[$path];
    
  }else{
    echo '404 Not Found';
  }
  
}
?>