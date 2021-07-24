<?php

//!Public - todo mundo ve
//!Protect - mesma class e class extends apenas
//!Private - somente mesma class


class Pessoa{

    public $nome = "Rasmus Lerdorff";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){

        echo $this ->nome;
        echo " ";
        echo $this ->idade;
        echo " ";
        echo $this ->senha;

    }

}

class Programador extends Pessoa{

    public function verDados(){

        get_class($this);

        echo $this ->nome;
        echo " ";
        echo $this ->idade;
        echo " ";
        echo $this ->senha;

    }

}



$p1 = new Programador();

//echo $p1 ->nome;

$p1 -> verDados();

