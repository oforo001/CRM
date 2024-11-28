<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
  }

function urlIS($value) {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    return $path === $value;
}

?>

