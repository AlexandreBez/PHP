<?php

$email = $_POST["inputEmail"];
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secrete" => "6Lc15wMbAAAAAFQD-3TdzQjz-qP0FSdmeIrhl_mC",
    "response" => $_POST["g-recaptcha-response"],
    "remoteip" => $_SERVER["REMOTE_ADDR"]
)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$recaptcha = json_decode(curl_exec($ch));

if ($recaptcha["sucess"] === true) {
    echo "OK: ".$_POST["inputEmail"];
}
