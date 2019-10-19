<?php

$artilheiro = 'Ronaldo';
$gols = 19;

$formato = 'O artilheiro do brasileirao, %s, tem %d gols.';

//$frase = printf($fromato, $artilheiro, $gols);
printf($formato, $artilheiro, $gols);

echo '<hr>';

$num = 5;
$local = 'árvore';

$formato = 'A %2$s contem %1$d macacos';
echo sprintf($formato, $num, $local);

echo '<hr>';

$string = 'hello world';
$string = ucfirst($string);

echo $string;

echo '<hr>';


$string = 'hello world';
$string = ucwords($string);

echo $string;

echo '<hr>';


$string = 'Hello World';
echo strtoupper($string), '<br>';
echo strtolower($string), '<br>';
echo lcfirst($string), '<br>';


echo lcfirst(strtoupper($string)), '<br>';

echo $string;

echo '<hr>';


$vogais = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

$apenasConsoantes = str_replace($vogais, "", "Hello World od PHP");

echo $apenasConsoantes; 






?>
