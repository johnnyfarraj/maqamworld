<?php
error_reporting(0);

$firstname = strip_tags($_POST['firstname']);
$lastname = strip_tags($_POST['lastname']);
$email = strip_tags($_POST['email']);
$ms = strip_tags($_POST['message']);

if(isset($firstname) && $firstname != "" && isset($lastname) && $lastname != "" && isset($email) && $email != "" && isset($ms) && $ms != "") {

    /* PHP MAIl FUNCTION */
    $to      = 'johnnyfarraj@gmail.com';
    $subject = 'Nuovo Messaggio da MaqamWorld';
    $message = 'Bonjour,<br><br>Hai un nuovo messaggio da MaqamWorld:<br><br>Name: '.$firstname.' '.$lastname.'<br>Email: '.$email.'<br>Message: '.$ms;
    $headers = 'From: no-reply@maqamworld.com' . "\r\n" .
    'Reply-To: johnnyfarraj@gmail.com' . "\r\n" .
    'Content-Type: text/html; charset=UTF-8\r\n';

    mail($to, $subject, $message, $headers);

    echo json_encode(array("status" => "success", "message" => "Grazie per averci contattato. proveremo a contattarti entro 24-48 ore."));
} else {
    echo json_encode(array("status" => "error", "message" => "si prega di compilare tutti i campi prima di inviare il documento."));
}

?>