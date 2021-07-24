<?php

class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct(){

        var_dump("DESTROY......");
    
    }

    public function __toString(){
        
        return $this -> logradouro.", " 
        .$this -> numero.
        " - ".$this->cidade;

    }
}

$endereco = new Endereco("rua cinzel das almas", "123", "Santiago");

echo $endereco;

//var_dump($endereco);

//unset($endereco);
