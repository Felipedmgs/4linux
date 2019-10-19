<?php

echo '<pre>';

$a = true;
$b = false;
$c = true;

var_dump(($a and $b)); //Retorna false
var_dump(($a or $b)); //Retorna true
var_dump(($a or $c)); //Retorna true
var_dump(($a xor $b)); //Retorna true
var_dump(($a xor $c)); //Retorna false
var_dump((!$a)); //Retorna false
var_dump(($a && $b)); //Retorna false
var_dump(($a || $b)); //Retorna true




?>
