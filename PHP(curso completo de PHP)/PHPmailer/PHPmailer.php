<?php

require_once("vendor/autoload.php");

$mail = new PHPMailer;
$mail -> isSMTP();
$mail -> SMTPDebug = 2;
$mail -> Debugoutput = 'html';
$mail -> Host = 'smtp.@gmail.com';
$mail -> Port = 587;
$mail -> SMTPSecure = 'tls';
$mail -> SMTPAuth = true;
$mail -> Username = 'remetente@gmail.com';
$mail -> Password = '0123456789';
$mail -> setFrom('remetente@gmail.com', 'Apelido');
$mail -> addAddress('destinario@gmail.com', 'Apelido');
$mail -> Subject = 'Assunto';
$mail -> msgHTML(file_get_contents('content.html'), dirname(__FILE__));
$mail -> AltBody = 'Plain-Text';
$mail -> addAttachment('image/phpmailer_mini.pgn');

if(!$mail->send()) {
    echo "Mailler Error: ".$mail->Errorinfo;
} else {
    echo "Successful Sent";
}
