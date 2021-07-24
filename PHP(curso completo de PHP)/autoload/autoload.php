<?php

function __autoload($nomeClasse){

    require_once("$nomeClasse.php");


}

$c1 = new Onix();

$c1 -> acelelerar(80);
