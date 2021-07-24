<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "root" );

$stmt = $conn->prepare("SELECT * FROM tb_usuario ORDER BY deslogin");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $row){
    foreach($result as $key =>$value){

        echo "<strong>".$key."</strong>".$value."<br/>";
    }

    echo "==============================================<br/>";
}

var_dump($result);

