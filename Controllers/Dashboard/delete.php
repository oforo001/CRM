<?php
session_start();
require '../../DB.php';
//var_dump($_SESSION['visit_id']);

if($_SESSION['visit_id']){
    $visit_id = $_SESSION['visit_id'];

    $db_connection = new Database();

    $stm = $db_connection->prepare(
        'DELETE FROM visits WHERE visit_id = :visit_id');

    $stm->execute(['visit_id' => $visit_id]);
    unset($_SESSION["visit_id"]);


}
header('Location: /CRM/dashboard');
exit;
