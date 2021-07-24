<?php

class Documento{

    private $numero;

    public function getNumero(){
        return $this ->numero;
    }

    public function setNumero($n){
        $this ->numero = $n;
    }

}

class CPF extends Documento{

    public function validar():bool{

        $numeroCPF = $this ->getNumero();

        //valida o cpf......

        return true;

    }

}

$doc = new CPF();

$doc ->setNumero("192.846.352.12");

var_dump($doc ->validar());


