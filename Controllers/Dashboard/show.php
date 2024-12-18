<?php
session_start();
require 'DB.php';
require_once 'functions.php';


if (isset($_GET['id']) && is_numeric($_GET['id'])){
  $visit_id = intval($_GET['id']);
  $_SESSION['visit_id'] = $visit_id;

}

$dbConnection = new Database();
$errors = [];

$fetchedResult = updateDashboardView($dbConnection, $visit_id);
//dd($fetchedResult);


require 'View/Dashboard/show.view.php';