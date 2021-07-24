<?php

$json = '[{"nome":"lucas", "idade":21}]';

$dado = json_decode($json, true);

var_dump($dado);
