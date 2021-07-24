<?php

class Pessoa{
    
    public $nome;
    public function falar(){
        return "o meu nome é ".$this->nome;
    }
}


$p1 = new Pessoa();
$p1 -> nome = "Orion";
echo $p1 -> falar();
