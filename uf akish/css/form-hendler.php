<?php
$name = $_POST[''];
$visitor_email = $_POST[''];
$subject = $_POST[''];
$message = $_POST[''];

$email_from = 'iilksnk@gmail.com';

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "subject: $subject.\n".
              "User message: $message.\n."

$to = 'thakursrajput84@gmail.com';

$headers = "Form: $email_from \r\n";

$headers .= "Reply-To: $visitor_email\r\n"



mail($to,$email_subject,$email_body,$headers);             

header("Location :contact.html");
?>