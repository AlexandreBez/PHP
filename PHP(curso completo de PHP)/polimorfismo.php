<?php

abstract class Animal {

    public function falar() {
        return 'som';
    }
    
    public function mover()
    {
        return 'anda';
    }
}

class Cachorro extends Animal {

    public function falar()
    {
        return 'latir ';
    }

}

class Gato extends Animal {

    public function falar()
    {
        return ' miar ';
    }
}

class Passaro extends Animal{

    public function falar()
    {
        return ' piar ';
    }

    public function mover()
    {
        return 'voa '. parent::mover();
    }
}

$pluto = new Cachorro();
echo $pluto -> falar();
echo $pluto -> mover();

$gato = new Gato();
echo $gato -> falar();
echo $gato -> mover();

$passaro = new Passaro();
echo $passaro -> falar();
echo $passaro -> mover();

