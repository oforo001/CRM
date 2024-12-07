<?php
session_start();
require 'Validator.php';
require 'DB.php';

$dbConnection = new Database();
$errors = [];

$errormessage = 'Provide correct data';
$succsess_message = 'You are successfully registered!';

$organisation_name = htmlspecialchars($_POST['business_name'] ?? '', ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8');
$NIP = htmlspecialchars($_POST['NIP'] ?? '', ENT_QUOTES, 'UTF-8');
$password = htmlspecialchars($_POST['password'] ?? '', ENT_QUOTES, 'UTF-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

  if (Validator::isEmpty($organisation_name) || !Validator::isLenghtOk($organisation_name, 1, 255)){
    $errors['business_name'] = $errormessage;
  }
  if (Validator::isEmpty($email) || !Validator::isLenghtOk($email, 1, 255) || !Validator::isEmail($email)){
    $errors['email'] = $errormessage;
  }
  if (Validator::isEmpty($NIP) || !Validator::isLenghtOk($NIP, 1, 10)){
    $errors['NIP'] = $errormessage;
  }
  if (Validator::isEmpty($password) || !Validator::isLenghtOk($password, 7, 255)){
    $errors['password'] = 'Please provide a password at lest 7 characters ';
  }

  if (empty($errors)){
    $statemetn = $dbConnection->prepare(
      'SELECT * FROM businesses WHERE NIP = :NIP OR email = :email'
    );

    $statemetn->execute(['NIP' => $NIP,
     'email' => $email]);

    if($statemetn->rowCount() > 0){
      $accountAlradyExist_ERROR = 'Business with this NIP or email already exists, please log in';
    }
    else{
      $statement = $dbConnection->prepare(
        'INSERT INTO businesses (nip, businnes_name, email, password) VALUES (:nip, :businnes_name, :email, :password)'
      );
      $statement->execute(
        [
          'nip' => $NIP,
          'businnes_name' => $organisation_name,
          'email' => $email,
          'password' => password_hash($password, PASSWORD_DEFAULT)
        ]
      
      );
      $_SESSION['user'] = [
        'organisation_name' => $organisation_name,
        'succsess_message' => $succsess_message
      ];

      header('Location: /CRM/for-businesses/login');
      exit();
    }
  }
}





require 'View/Register/register.view.php';