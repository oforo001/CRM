<?php
session_start();

require 'DB.php';

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["visit_id"])){
    $visit_id = $_SESSION["visit_id"];
}
// need to connect to DB


// need to run the query


// than redirect to show.php


//ensure that data is updated after deleting the entity