<?php

$a = 20;
$b = 10;

$mensagem = ($a > $b) ? '$a é maior' : '$b é maior';

//mais abrangente
$mensagem = ($a > $b) ? '$a é maior' : (($b > $a) ? '$b é maior': 'Valores iguais $a e $b');

echo $mensagem;

?>
