<?php

echo time();

echo date("  d/m/Y h:i:s   ");

//$ts = strtotime('2001-09-11');

$ts = strtotime('now +1 week +1 day');

echo date("l d/m/Y", $ts);