<?php

$x = $_REQUEST["num1"];
$y = $_REQUEST["num2"];
$z = $x + $y;

sleep(3); //Задержка 10 секунд (симуляция задержки)
echo $z;