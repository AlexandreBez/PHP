<?php

function incluirClasses($nomeClasse){
    
    if (file_exists($nomeClasse.".php") === true){ 

        require_once($nomeClasse.".php");
    }

}

spl_autoload_register("incluirClasses");
spl_autoload_register(function ($nomeClasse) {

    if (file_exists("abstrata".DIRECTORY_SEPARATOR.$nomeClasse.".php") === true){ 

        require_once($nomeClasse.".php");
    }
});

$c1 = new Onix();

$c1 -> acelelerar(80);

