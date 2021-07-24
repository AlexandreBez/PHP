<?php

require_once("config.php");

use client\Cadastro;

$cad = new Cadastro();

$cad->setNome("Dijalma Sindeaux");
$cad->setEmail('Djalma@outlook.com');
$cad->setSenha('123456789');

$cad->registrarVenda();

