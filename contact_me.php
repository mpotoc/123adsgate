<?php
// Check for empty fields
if(empty($_POST['name']) ||
   empty($_POST['email']) ||
   empty($_POST['phone']) ||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
       echo "No arguments provided!";
       return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Create the email and send the message

// Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$to = 'webmaster@123adsgate.com';
$email_subject = "123adsgate.com contact form:  $name";
$email_body = "You have received a new message from 123adsgate.com contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
// This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers = "From: webmaster@123adsgate.com\n";
$headers .= "Reply-To: $email_address";
mail($to, $email_subject, $email_body, $headers);
return true;