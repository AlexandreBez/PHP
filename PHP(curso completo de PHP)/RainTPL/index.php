<?php

require_once("vendor/autoload.php");

use Rain\Tpl;
$config = array(
    "tpl_dir" => "tpl/",
    "cache_dir" => "cache/",
);

Tpl::configure($config);
// Tpl::registerPlugin(new Tpl\Plugin\PathReplace());
$tpl = new Tpl;
$tpl -> assign("name", "Hcode");
$tpl -> assign("Version", PHP_VERSION);
// $tpl -> draw("Simple_template");
$html = $tpl -> draw("index", true);

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
$mail -> msgHTML($html);
$mail -> AltBody = 'Plain-Text';
$mail -> addAttachment('image/phpmailer_mini.pgn');

if(!$mail->send()) {
    echo "Mailler Error: ".$mail->Errorinfo;
} else {
    echo "Successful Sent";
}
