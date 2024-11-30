<?php
require 'DB.php';
require 'Validator.php';

$dbConnection = new Database();
$errors = [];
$errorMessage = 'Provide correct data';

$visitor = null; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    $reason = $_POST['reason'];
    $NIP = $_POST['NIP'];
    $about = $_POST['about'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $visitor_id = $_POST['visitor_id'] ?? '';
    $visit_date = $_POST['visit_date'];
    $begins_at = $_POST['begins_at'];
    $end_at = $_POST['end_at'];


    // Validation checks
    if (Validator::isEmpty($reason) || !Validator::isLenghtOk($reason, 1, 255)) {
        $errors['reason'] = $errorMessage;
    }

    if (Validator::isEmpty($NIP) || !Validator::isLenghtOk($NIP, 1, 10)) {
        $errors['NIP'] = $errorMessage;
    }

    if (Validator::isEmpty($about) || !Validator::isLenghtOk($about, 1, 1000)) {
        $errors['about'] = $errorMessage;
    }

    if (Validator::isEmpty($name) || !Validator::isLenghtOk($name, 1, 255) || !Validator::ckeckName($name)) {
        $errors['name'] = $errorMessage;
    }

    if (Validator::isEmpty($lastname) || !Validator::isLenghtOk($lastname, 1, 255) || !Validator::ckeckName($lastname)) {
        $errors['lastname'] = $errorMessage;
    }

    if (Validator::isEmpty($email) || !Validator::isLenghtOk($email, 1, 255) || !Validator::isEmail($email)) {
        $errors['email'] = $errorMessage;
    }

    if (isset($visitor_id) && !empty($visitor_id)) {
        $statement = $dbConnection->prepare('SELECT * FROM visitors WHERE visitor_id = :visitor_id');
        $statement->execute(['visitor_id' => $visitor_id]);
        
        if ($statement->rowCount() === 0) {
            $errors['visitor_id'] = 'Visitor with this ID does not exist';
        }
    }

    if(! Validator:: isDateOk($visit_date)){
        $errors['visit_date'] = $errorMessage;
    }

    if(! isset($begins_at) || ! isset($end_at) || ! Validator:: isTimeOk($begins_at, $end_at)){
        $errors['begins_at'] = $errorMessage;
        $errors['end_at'] = $errorMessage;
    }

    if(empty($errors)){
        $statement = $dbConnection->prepare (
            'INSERT INTO visits (visitor_id, business_nip, reason, about, visit_date, begin_time, end_time)
             VALUES (:visitor_id, :NIP, :reason, :about, :visit_date, :begins_at, :end_at)'
        );
        $statement->execute([
            'visitor_id' => $visitor_id,
            'NIP' => $NIP,
            'reason' => $reason,
            'about' => $about,
            'visit_date' => $visit_date,
            'begins_at' => $begins_at,
            'end_at' => $end_at
        ]);

        header('Location: /CRM/');
        exit();

        
    }

}

require 'View/Create/create-appointment.view.php';
?>
