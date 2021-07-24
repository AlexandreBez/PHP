<?php

$conn = new PDO(
    "sqlsrv:Database=dbphp7;
    server=localhost\SQLEXPRESS;
    ConnectionPooling=0", "root", "root" 

);

$stmt = $conn->prepare("SELECT * FROM tb_usuario ORDER BY deslogin");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

