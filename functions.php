<?php



function urlIS($value) {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    return $path === $value;
}

?>

