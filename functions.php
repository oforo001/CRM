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

function updateDashboardView($db_connection, $value){
    $stm = $db_connection->prepare('
        SELECT  reason, about, visit_date, begin_time, end_time, created_at
        FROM visits
        WHERE visit_id = :visit_id
    ');
    $fetchedResult = $stm->execute(['visit_id' => $value])->fetch();
    return $fetchedResult;
}




