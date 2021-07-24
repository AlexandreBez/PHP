<?php

$a = 'lucas';
echo "$a Alexandre ";
echo strtoupper("$a Alexandre_");
echo strtolower(" $a Alexandre_");

echo ucwords("_$a");
echo ucfirst("_$a");
echo ucfirst("_$a");

$a = str_replace("s", "$", $a);
echo  " $a ";

######################################

$frase = "Strong is the person who control his own mind";
$palavra ="person";

$q = strpos($frase, "is");
$texto = substr($frase, 0, $q);
$texto2 = substr($frase, $q + strlen($palavra,), strlen($frase));


var_dump($q);
