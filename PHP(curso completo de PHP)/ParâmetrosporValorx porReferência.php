<?php

$a =10;

function trocaValor(&$a){
    //$a = 50;
    $a += 50;

    return $a;
}
echo trocaValor($a);
echo $a;

$pessoa = array(
    'nome' => 'bla',
    'idade' => 20
);

foreach($pessoa as &$value) {

    if(gettype($value) === 'integer') $value +=10;

    echo $value;

}

print_r($pessoa);
