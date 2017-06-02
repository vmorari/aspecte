<?php 
$mesaj=$_POST['mesaj'];
$email=$_POST['email'];

$email_to = "office@livaldesign.de";
$email_subject = "Contact  - Aspecte Studio";

$email_message = "Email: ".$email."\n";
$email_message .= "Message: ".$mesaj."\n";

$headers = "Message from ".$email;

$mail_status = mail($email_to, $email_subject, $email_message, $headers);

if ($mail_status) { 
echo "Your message has been send! Thank You!";
} else {
echo "There was a problem! Please try again!";
}?>