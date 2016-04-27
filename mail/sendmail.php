<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$to = "rajib0821@gmail.com";
$subject = "Hi From Localhost";
$message = "Welcome Mail from Localhost";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: rajiv.lamptechnology@gmail.com" . "\r\n";
mail($to, $subject, $message, $headers);
echo "Mail Sent";
?>

