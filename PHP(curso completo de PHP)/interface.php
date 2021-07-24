<?php

interface Veiculo {

    public function acelelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);

}

//!Pode ser implementando mais que uma interface utilizando virgula
//!exemplo: class Civic implements Veiculo, cor{ 

class Civic implements Veiculo{


    public function acelelerar($velocidade)
    {
        echo "acelerando: ". $velocidade. " KM/H";
    }

    public function freiar($velocidade)
    {

        echo "freiando: ". $velocidade." KM/H";
    }

    public function trocarMarcha($marcha)
    {
        echo "Trocando a marcha: ". $marcha;
    }


}


$carro = new Civic();

$carro ->acelelerar(10);
$carro ->freiar(10);
$carro ->trocarMarcha(4);

