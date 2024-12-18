<?php 
session_start();

require_once 'functions.php';


if(! isset($_SESSION['loginned_user'])){
  header('Location: /CRM/for-businesses/login');
  exit();
}
$loginned_user = $_SESSION['loginned_user']['NIP'];
var_dump($loginned_user);
//die();

require 'DB.php';
$dbConnection = new Database();



$appointsment_data = update_dashboard($dbConnection, $loginned_user);





require 'View/Dashboard/dashboard.view.php';