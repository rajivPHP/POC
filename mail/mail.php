<?php

set_time_limit(3600);
//path to PHPMailer class
require_once('vendor/phpmailer/phpmailer/class.phpmailer.php');
// optional, gets called from within class.phpmailer.php if not already loaded
include("vendor/phpmailer/phpmailer/class.smtp.php");
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
require 'vendor/autoload.php';
$mail = new PHPMailerOAuth;
$mail->CharSet = "UTF-8";
// telling the class to use SMTP
$mail->isMail();
// enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->Mailer = "smtp";
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';

// enable SMTP authentication
$mail->SMTPAuth = true;
// sets the prefix to the servier
$mail->SMTPSecure = "ssl";
//$mail->SMTPSecure = 'tls';
// sets GMAIL as the SMTP server
$mail->Host = "smtp.gmail.com";
// set the SMTP port for the GMAIL server
$mail->Port = 465;
// GMAIL username
$mail->Username = "rajiv.lamptechnology@gmail.com";
// GMAIL password
$mail->Password = "lamptech@2012";
//Set reply-to email this is your own email, not the gmail account 
//used for sending emails
$mail->From = "rajiv.lamptechnology@gmail.com";
$mail->FromName = "Rajiv K";

$mail->oauthUserEmail = "<rajiv.lamptechnology>@gmail.com";
$mail->oauthClientId = "981606690864-17garaagsglsl25kckiea76frco5e89n.apps.googleusercontent.com";
$mail->oauthClientSecret = "MHvwcwvYfndzDjUuUE_RzrcN";
$mail->oauthRefreshToken = "1/7Jt8_RHX86Pk09VTfQd4O_ZqKbmuV7HpMNz-rqJ4KdQMEudVrK5jSpoR30zcRFq6";
// Mail Subject
$mail->Subject = "My Subject";
$mail->Timeout = 3600;
//Main message
$mail->IsHTML(true);
$mail->Body = "Hi! How are you? This is a Test Mail From PHP Mailer";
//word wrap
$mail->WordWrap = 50;
//Your email, here you will receive the messages from this form. 
//This must be different from the one you use to send emails, 
//so we will just pass email from functions arguments
$mail->AddAddress("rajib0821@gmail.com", "Sagayaraj K");
if (!$mail->Send()) {
    echo 'Message was not sent.';
    echo 'Mailer error: ' . $mail->ErrorInfo;
    exit;
} else {
    echo 'Message has been sent.';
}
?>