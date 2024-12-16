<?php 
session_start();


if(! isset($_SESSION['loginned_user'])){
  header('Location: /CRM/for-businesses/login');
  exit();
}
$loginned_user = $_SESSION['loginned_user'];

require 'DB.php';
$dbConnection = new Database();

$stm = $dbConnection->prepare('
  SELECT visit_id, representant_name, representant_lastname, representant_email
  FROM visits
  WHERE business_nip = :business_nip
');
$stm->execute(['business_nip' => $loginned_user['NIP']]);


$appointsment_data = $stm->fetchAll();
//dd($appointsment_data);




require 'View/Dashboard/dashboard.view.php';