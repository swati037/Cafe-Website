<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'info@gmail.com';
$email_subject = 'New Customer Message';
$email_body = "Name : $name \n";
			  "E-Mail : $email \n";
			  "Message : $message \n";



$to = 'admin@gmail.com';

$headers = "From : $email_from \r\n";

$headers .= "Reply-To : $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

 ?>