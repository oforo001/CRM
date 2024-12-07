<?php 
session_start();

if(! isset($_SESSION['loginned_user'])){
  header('Location: /CRM/for-businesses/login');
  exit();
}
require 'View/Dashboard/dashboard.view.php';