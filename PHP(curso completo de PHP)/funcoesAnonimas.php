<?php

function test($callback){
    //processo lento

    $callback();
}

test(function(){
    echo 'terminou.... ';
});

$fn = function($a){
    
    var_dump($a);
};

$fn('oi');

