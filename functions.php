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

function update_show_veiw($db_connection, $value){
    $stm = $db_connection->prepare('
        SELECT  reason, about, visit_date, begin_time, end_time, created_at
        FROM visits
        WHERE visit_id = :visit_id');
    return $stm->execute(['visit_id' => $value])->fetch();
}
function update_dashboard($db_connection, $value)
{
    $stm = $db_connection->prepare('
  SELECT visit_id, representant_name, representant_lastname, representant_email
  FROM visits
  WHERE business_nip = :business_nip');
    $stm->execute(['business_nip' => $value]);

    return $stm->fetchAll();

}




