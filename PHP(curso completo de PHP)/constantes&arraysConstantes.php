<?php

    define("servidor", "127.0.0.1");

    echo servidor;


    define("BANCO_DE_DADOS", [
        "127.0.0.1",
        "Root",
        "Password",
        "test"
    ], false);

    print_r(BANCO_DE_DADOS);

    echo PHP_VERSION;
    echo DIRECTORY_SEPARATOR;
