<?php
error_reporting(0);

$firstname = strip_tags($_POST['firstname']);
$lastname = strip_tags($_POST['lastname']);
$email = strip_tags($_POST['email']);
$ms = strip_tags($_POST['message']);

if(isset($firstname) && $firstname != "" && isset($lastname) && $lastname != "" && isset($email) && $email != "" && isset($ms) && $ms != "") {
    
    /* PHP MAIl FUNCTION */
    $to      = 'johnnyfarraj@gmail.com';
    $subject = 'Nouveau message de MaqamWorld';
    $message = 'Bonjour,<br><br>Vous avez un nouveau message de MaqamWorld:<br><br>Nom: '.$firstname.' '.$lastname.'<br>Email: '.$email.'<br>Message: '.$ms;
    $headers = 'From: no-reply@maqamworld.com' . "\r\n" .
    'Reply-To: johnnyfarraj@gmail.com' . "\r\n" .
    'Content-Type: text/html; charset=UTF-8\r\n';
    
    mail($to, $subject, $message, $headers);
    
    echo json_encode(array("status" => "success", "message" => "Merci de nous avoir contactés. Nous tacherons de vous répondre dans les prochaines 24 - 48 heures."));
} else {
    echo json_encode(array("status" => "error", "message" => "Prière de tout remplir avant d'envoyer le document."));
}

?>