<?php

$frutas = array("laranja", "abacaxi", "melancia");

$carros[0][0] = "Onix";
$carros[0][1] = "Fiesta";
$carros[0][2] = "Maceratti";

$carros[1][0] = "Mercedes-Bens";
$carros[1][1] = "Jaguar";
$carros[1][2] = "Lamborghini";


print_r($frutas);
####################################

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'lucas',
    'idade' => 21
));

print_r($pessoas);

print_r($pessoas[0]['nome']);

echo $carros[0][2];
