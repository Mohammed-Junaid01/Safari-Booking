<?php
$name = $_POST['name'];
$visiter_email = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@abc.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Name: $visiter_email.\n".
               "User Name: $number.\n".
               "Subject: $subject.\n".
               "User Message: $message.\n";


$to = 'junnu001122@gmail.com'

$headers = "Form: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>