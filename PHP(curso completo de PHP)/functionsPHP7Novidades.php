<?php
/*
function soma(int ...$valores){
    return array_sum($valores);
};

echo soma(2, 4);
echo " ";
echo soma(3, 45);
echo " ";
echo soma(1.6, 7.2);
*/
function soma(int ...$valores):string {
    return array_sum($valores);
};

echo var_dump(soma(2, 4));
echo " ";
echo var_dump(soma(3, 45));
echo " ";
echo var_dump(soma(1.6, 7.2));