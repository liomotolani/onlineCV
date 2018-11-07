<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "ligaliomotolani@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='CV.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>