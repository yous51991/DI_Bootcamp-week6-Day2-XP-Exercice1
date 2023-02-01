<?php

$variable1= $_POST['var1'];
$variable2 = $_POST['var2'];
$sum = (float)$variable1 + (float)$variable2;
$differentce = (float)$variable1 - (float)$variable2;
$mul = (float)$variable1 * (float)$variable2;

echo("La somme entre ".$variable1. " et ".$variable2." est ".$sum);
echo"<br>";
echo("La difference entre ".$variable1. " et ".$variable2." est ".$differentce);

echo("<br>");
echo("La multiplication entre ".$variable1. " et ".$variable2." est ".$mul);