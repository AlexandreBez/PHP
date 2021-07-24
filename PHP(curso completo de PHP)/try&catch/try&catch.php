<?php

try {

    throw new Exception("Error Processing Request", 400);

} catch(Exception $e) {

    echo json_encode(array(
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ));
}

function trataNome($name) {

    if(!$name) {

        throw new Exception("Errorrrr",2859393);
    }

    echo ucfirst($name)."<br>";

}

try {

    trataNome("João");
    trataNome("");

} catch(Exception $e) {

    echo $e->getMessage();

}finally {

    echo "Executou o bloco try";
    
}


