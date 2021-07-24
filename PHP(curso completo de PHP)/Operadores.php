<?php
$nome = 'lucas';
//echo $nome. ' bez ';

$nome .= " alexandre ";
//echo $nome;

$valorTotal = 0;

$valorTotal += 100;

$valorTotal *= .9;
//echo $valorTotal;

$a = 2;
$b = 5;

echo $a + $b;
echo "__"; 
echo $a - $b;
echo "__"; 
echo $a * $b;
echo "__"; 
echo $a / $b;
echo "__"; 
echo $a % $b;
echo "__";
echo $a ** $b; 

$c = 30;
$d = 200;
$e = null;
$f = null;

var_dump($c and $d);
var_dump($c or $d);
var_dump($c xor $d);
var_dump($c < $d);
var_dump($c > $d);
var_dump($c <= $d);
var_dump($c >= $d);
var_dump($c == $d);
var_dump($c === $d);
var_dump($c !== $d);
var_dump($c <=> $d);

echo $e ?? $f ?? $c;

