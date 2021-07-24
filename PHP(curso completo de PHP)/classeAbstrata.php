<?php

interface Veiculo {

    public function acelelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);

}


abstract class Automovel implements Veiculo{


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


class Onix extends Automovel{

    public function empurrar(){

    }

}

$carro = new Onix();

$carro->acelelerar(200);
