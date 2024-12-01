<?php
require 'DB.php';
require 'Validator.php';

$dbConnection = new Database();
$errors = [];
$errorMessage = 'Provide correct data';

$visitor = null; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $reason = htmlspecialchars($_POST['reason'] ?? '', ENT_QUOTES, 'UTF-8');
    $NIP = htmlspecialchars($_POST['NIP'] ?? '', ENT_QUOTES, 'UTF-8');
    $about = htmlspecialchars($_POST['about'] ?? '', ENT_QUOTES, 'UTF-8');
    $name = htmlspecialchars($_POST['first_name'] ?? '', ENT_QUOTES, 'UTF-8');
    $lastname = htmlspecialchars($_POST['last_name'] ?? '', ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8');
    $visitor_id = $_POST['visitor_id'] ?? '';
    $visit_date = $_POST['visit_date'] ?? '';
    $begins_at = $_POST['begins_at'] ?? '';
    $end_at = $_POST['end_at'] ?? '';


    // Validation form checks

    if (Validator::isEmpty($reason) || !Validator::isLenghtOk($reason, 1, 255)) {
        $errors['reason'] = $errorMessage;
    }

    if (Validator::isEmpty($NIP) || !Validator::isLenghtOk($NIP, 1, 10)) {
        $errors['NIP'] = $errorMessage;
    } else {
        $nipStatement = $dbConnection->prepare('SELECT * FROM businesses WHERE nip = :NIP');
        $nipStatement->execute(['NIP' => $NIP]);
    
        if ($nipStatement->rowCount() === 0) {
            $errors['NIP'] = 'Business with this NIP does not exist. Please get the correct NIP from the target organization.';
        }
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
         $errors['visitor_id'] = 'Visitor with this ID does not exist
                                get the ID from your Organisation';
           
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
            'INSERT INTO visits (visitor_id, business_nip, reason, representant_name, representant_lastname, representant_email, about, visit_date, begin_time, end_time)
             VALUES (:visitor_id, :NIP, :reason, :name, :last_name, :email, :about, :visit_date, :begins_at, :end_at)'
        );
        $statement->execute([
            'visitor_id' => $visitor_id,
            'NIP' => $NIP,
            'reason' => $reason,
            'name' => $name,
            'last_name' => $lastname,
            'email' => $email,
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
