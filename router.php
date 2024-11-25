<?php


$routes = [
  '/CRM/' => 'Controllers/index.php',
  '/CRM/about' => 'Controllers/about.php'
];


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
echo $path;

if(array_key_exists($path, $routes)){
  require $routes[$path];
}else{
  echo '404 Not Found';
}

?>