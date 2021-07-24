<?php

function ola($texto, $texto2 = 'bla2'){
    return "Ola..........$texto, $texto2,";

}

echo ola('bla');
echo ola("p1");
echo ola("p2");
echo ola("p3");
echo ola("p4");


function ola2(){
    $argumentos = func_get_args();
}

var_dump(ola2('cyberwave'));

