<?php

$name = "images";

if(!is_dir($name)) {

    mkdir($nome);
    echo "Diretorio $name criado com sucesso";

} else {

    rmdir($nome);
    echo "Já Existe o diretorio: $nome";
}

$images = scandir("images");

foreach($images as $key => $value) {
    if(!in_array($img, array(".", ".."))){

        $filename = "images".DIRECTORY_SEPARATOR.$img;
        
        $info = pathinfo($filename);

        $info["size"] = filesize($file);
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost/DIR/".str_replace("\\", "/", $filename);

        var_dump($info);

        array_push($data, $info);
    }
}

var_dump($images);

$data = array();

echo json_encode($data);

