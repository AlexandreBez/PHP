<?php

    session_id('7fjkd64kjd67jdye6hrudggdutt38647');

    require_once("config.php");
    session_regenerate_id();

    echo session_id();

    var_dump($_SESSION);


?>