<?php
    
echo '<pre>';

$var = 10;

$cast = (boolean) $var; //tornar-se booleano
var_dump($cast);

$cast = (int) $var; //torna-se inteiro
var_dump($cast);

$cast = (float) $var; //torna-se float
var_dump($cast);

$cast = (string) $var; //torna-se string
var_dump($cast);

$cast = (array) $var; //torna-se array
var_dump($cast);

$cast = (object) $var; //torna-se object
var_dump($cast);

$cast = (unset) $var; //torna-se object
var_dump($cast);

?>
