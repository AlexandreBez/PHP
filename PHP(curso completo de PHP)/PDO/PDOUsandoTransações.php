<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "root" );

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

//! rollback cancela a transacao
//$conn->rollBack();

//!commit confirma a transaçao
$conn->commit();

echo "Dados deletados com sucesso";

