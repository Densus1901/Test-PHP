<?php
include "classes/class.phpmailer.php";
$mail = new PHPMailer;
$mail->IsSMTP();
$mail->SMTPSecure = ‘tls’;
$mail->Host = "localhost"; //hostname masing-masing provider email
$mail->SMTPDebug = 2;
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "admin@namadomain"; //user email
$mail->Password = "XXXXX"; //password email
$mail->SetFrom("admin@namadomain","Nama pengirim yang muncul"); //set email pengirim
$mail->Subject = "Pemberitahuan Email dari Website"; //subyek email
$mail->AddAddress("admin@namadomain","Nama penerima yang muncul"); //tujuan email
$mail->MsgHTML("Testing…");
if($mail->Send()) echo "Message has been sent";
else echo "Failed to sending message";
?>