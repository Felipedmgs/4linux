<?php

echo '<pre>';
$var = "0"; //$var é uma string
var_dump($var);

$var += 2; //$var agora é um inteiro
var_dump($var);

$var = $var + 1.3; //$var agora é um float
var_dump($var);

$var = 5 + "10"; //inteiro ($var = 15)
var_dump($var);

$var = "1" + "1"; // inteiro ($var = 2)
var_dump($var);



?>
