<?php

$conn = new mysqli('localhost','root', 'root', 'dbphp7','3306');

if ($conn-> connect_error) {
    echo "ERROR: ".$conn->connect_error;
};

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, desenha) VALUE (?, ?)");
$stmt-> bind_param("ss", $login, $pass);

$login = 'user';
$pass = '12345';

$stmt-> execute();

