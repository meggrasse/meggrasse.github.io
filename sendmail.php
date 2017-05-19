<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$errName = 0;
$errEmail = 0;
$errMessage = 0;

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$from = 'Web Contact Form'; 
$to = 'meggrasse@gmail.com'; 
$subject = 'Message from Contact Form';
        
$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
if (!$_REQUEST['name']) {
    $errName = 'Please enter your name';
}
        
        // Check if email has been entered and is valid
if (!$_REQUEST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Please enter a valid email address';
}
        
        //Check if message has been entered
if (!$_REQUEST['message']) {
    $errMessage = 'Please enter your message';
}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will get back to you as soon as I can.</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message.</div>';
    }
}
?>