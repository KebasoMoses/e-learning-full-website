<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@kebaso.co.ke';
$email_subject = 'New form submission';
$email_body = "username: $name.\n".
              "user email: $email.\n".
              "subject: $subject.\n".
              "message: $message.\n";



$to = 'omyprank@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);


header("Location: contact.html");

?>