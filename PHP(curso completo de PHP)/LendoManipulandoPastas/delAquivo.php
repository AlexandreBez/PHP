<?php

$file = fopen("test.txt", "w+");

fclose($file);

unlink("teste.txt");

echo "Arquivo removido";

