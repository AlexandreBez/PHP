<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="ok">
</form>

<?php

$meses = ["Janeiro ", "Fevereiro ", "Março ", 
            "Abril ", "Maio ", "Junho ","Julho ",
              "Agosto ", "Setembro ", "Outubro ", 
                "Novembro ", "Dezembro"
];

/*
foreach($meses as $key => $value) {
    echo $key;
};
*/

if(isset($_GET)) {
    
    foreach($_GET as $key => $value){

        echo "Nome do Campo: " .$key. "<br>";
        echo "valor do campo: ". $value. "<br>";
    
    };
};

?>

