<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'pavankalisettiswe2004@gmail.com'

$email_subject = 'New From Submission'

$email_body = 'User Name: $name.\n'.

                'User Email: $visitor_email.\n'.
                'User Subject: $subject.\n'.
                'User Message: $message.\n';

$to = 'pavankalisetti9@gmail.com';

$headers  = "From: $email_from \r\n";

$headers .= "Reply-Ro: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
 
?>