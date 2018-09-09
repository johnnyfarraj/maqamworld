<?php
error_reporting(0);

$firstname = strip_tags($_POST['firstname']);
$lastname = strip_tags($_POST['lastname']);
$email = strip_tags($_POST['email']);
$ms = strip_tags($_POST['message']);

if(isset($firstname) && $firstname != "" && isset($lastname) && $lastname != "" && isset($email) && $email != "" && isset($ms) && $ms != "") {
    
    /* PHP MAIl FUNCTION */
    $to      = 'johnnyfarraj@gmail.com';
    $subject = 'New Message from MaqamWorld (Arabic)';
    $message = 'Hello,<br><br>You have a new message from MaqamWorld:<br><br>Name: '.$firstname.' '.$lastname.'<br>Email: '.$email.'<br>Message: '.$ms;
    $headers = 'From: no-reply@maqamworld.com' . "\r\n" .
    'Reply-To: johnnyfarraj@gmail.com' . "\r\n" .
    'Content-Type: text/html; charset=UTF-8\r\n';
    
    mail($to, $subject, $message, $headers);
    
    echo json_encode(array("status" => "success", "message" => "شكراً على اتصالكم بنا. سوف يتمّ الردّ على رسالتكم خلال ٢٤ - ٤٨ ساعة."));
} else {
    echo json_encode(array("status" => "error", "message" => "الرجاء ادخال البيانات في جميع الحقول قبل الارسال."));
}

?>