<?php

require_once("C:\Users\Pavilion dv6\Desktop\Desenvolvimento\PHP\PHP(curso completo de PHP)\config.php");
var_dump(session_save_path());
echo "<br>";
var_dump(session_status());
echo "<br>";
switch(session_status()){

    case PHP_SESSION_DISABLED;
    echo "Sesão desabilitada";
    break;

    case PHP_SESSION_NONE;
    echo "Não à sessão";
    break;

    case PHP_SESSION_ACTIVE;
    echo "Sessão habilitada";
    break;

};

