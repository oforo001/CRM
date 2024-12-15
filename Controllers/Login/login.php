<?php
session_start();

require 'Validator.php';
require 'DB.php';

$dbConnection = new Database();
$errors = [];
$errormessage = 'Provide correct data';

$email = htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8');
$NIP = htmlspecialchars($_POST['NIP'] ?? '', ENT_QUOTES, 'UTF-8');
$password = htmlspecialchars($_POST['password'] ?? '', ENT_QUOTES, 'UTF-8');

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  if (Validator::isEmpty($email) || !Validator::isLenghtOk($email, 1, 255) || !Validator::isEmail($email)){
    $errors['email'] = $errormessage;
  }
  if (Validator::isEmpty($NIP) || !Validator::isLenghtOk($NIP, 1, 10)){
    $errors['NIP'] = $errormessage;
  }
  if (Validator::isEmpty($password) || !Validator::isLenghtOk($password, 7, 255)){
    $errors['password'] = $errormessage;
  }

  if(empty($errors)){
    $user = $dbConnection->prepare(
      'SELECT * FROM businesses WHERE email = :email AND nip = :NIP'
    );

    $user->execute(['email' => $email,
    'NIP' => $NIP]);
    $result_user = $user->fetch();
    $organisation_name = $result_user['businnes_name'];
    
  }
  if(! $result_user){
    $errors['account_not_exist'] = 'No matching account found for that E-Mail or NIP';
  }
  else{
    if(password_verify($password, $result_user['password'])){
      $_SESSION['loginned_user'] = [
        'email' => $email,
        'NIP' => $NIP,
        'organisation_name' => $organisation_name
      ];
      //dd($_SESSION['loginned_user']);
      
      header('Location: /CRM/dashboard');
      exit();
    }
  }
}


require 'View/Login/login.view.php';
?>