<?php
error_reporting(0);

$firstname = strip_tags($_POST['firstname']);
$lastname = strip_tags($_POST['lastname']);
$email = strip_tags($_POST['email']);
$ms = strip_tags($_POST['message']);

if(isset($firstname) && $firstname != "" && isset($lastname) && $lastname != "" && isset($email) && $email != "" && isset($ms) && $ms != "") {
    
    /* PHP MAIl FUNCTION */
    $to      = 'johnnyfarraj@gmail.com';
    $subject = 'Nuevo mensaje del Mundo del Maqam';
    $message = 'Hola,<br><br>tienes un nuevo mensaje del Mundo del Maqam:<br><br>Nombre: '.$firstname.' '.$lastname.'<br>Correo Electrónico: '.$email.'<br>Mensaje: '.$ms;
    $headers = 'From: no-reply@maqamworld.com' . "\r\n" .
    'Reply-To: johnnyfarraj@gmail.com' . "\r\n" .
    'Content-Type: text/html; charset=UTF-8\r\n';
    
    mail($to, $subject, $message, $headers);
    
    echo json_encode(array("status" => "success", "message" => "Gracias por contactarnos. Le responderemos en las próximas 24 a 48 horas."));
} else {
    echo json_encode(array("status" => "error", "message" => "Favor de rellenar el formulario completo antes de enviarlo."));
}

?>