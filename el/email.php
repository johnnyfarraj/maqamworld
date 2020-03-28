<?php
error_reporting(0);

$firstname = strip_tags($_POST['firstname']);
$lastname = strip_tags($_POST['lastname']);
$email = strip_tags($_POST['email']);
$ms = strip_tags($_POST['message']);

if(isset($firstname) && $firstname != "" && isset($lastname) && $lastname != "" && isset($email) && $email != "" && isset($ms) && $ms != "") {
    
    /* PHP MAIl FUNCTION */
    $to      = 'johnnyfarraj@gmail.com';
    $subject = 'Νέο μήνυμα από τον ιστότοπο Κόσμος των Μακάμ';
    $message = 'Γειά σας,<br><br>έχετε ένα νέο μήνυμα από τον ιστότοπο Κόσμος των Μακάμ:<br><br>Όνομα: '.$firstname.' '.$lastname.'<br>EmΗλεκτρονικό ταχυδρομείοail: '.$email.'<br>Μήνυμα: '.$ms;
    $headers = 'From: no-reply@maqamworld.com' . "\r\n" .
    'Reply-To: johnnyfarraj@gmail.com' . "\r\n" .
    'Content-Type: text/html; charset=UTF-8\r\n';
    
    mail($to, $subject, $message, $headers);
    
    echo json_encode(array("status" => "success", "message" => "Ευχαριστούμε που επικοινωνήσατε μαζί μας. Θα σας απαντήσουμε στις επόμενες 24-48 ώρες."));
} else {
    echo json_encode(array("status" => "error", "message" => "Παρακαλούμε συμπληρώστε ολόκληρη τη φόρμα πριν την αποστολή."));
}

?>