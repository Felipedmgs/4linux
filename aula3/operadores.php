<?php

echo '<pre>';

$a = '5';

var_dump($a); // $a é uma string
var_dump(+$a); // $a é convertido para int positivo
var_dump(-$a); // $a é convertido para int negativo

$b = '5.3';
var_dump($b); //$b é uma string
var_dump(+$b); //$b é convertido para float positivo
var_dump(-$b); //$b é convertido para float negativo

$c = $a + $b; //soma
var_dump($c); //resultado é 10.3

$c = $a - $b; //subtracao
var_dump($c); //resultado é -0.3

$c = $a * $b; //multiplicacao
var_dump($c); //resultado é 26.5

$c = $a / $b; //divisao
var_dump($c); //resultado é 0.94339622641509

$c = $a % $b; //modulo
var_dump($c); //resultado é 0

$c = $a ** $b; //exponencial
var_dump($c); //resultado é 50064.5518646649


?>
