<?php

require_once("config.php");

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuario");

// echo json_encode($usuarios);

//!Carrega um usuario
// $root = new Usuario;

// $root->loadByID(0);

//!carega uma lsita de usuarios

// $lista = Usuario::getlist

//!carrega uma lista buscando pelo login

// $Search = Usuario::search("root");
// echo json_encode($Search);

//!carrega usuario, login e senha

// $usuario = new Usuario();
// $usuario->login("root", "root");

// echo $usuario;

// $aluno = new Usuario("aluno, @lun0");
// $aluno->insert();

//!criando um novo usuario

// $usuario = new Usuario();
// $usuario->loadByID(8);
// $usuario->update("professor", "12345");

//!delete um usuario

$usuario = new Usuario();
$usuario->loadByID(3);
$usuario->delete();
