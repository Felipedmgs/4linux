<?php

$a = [1, 2, 3, 4, 5];

$b = array_map(function($elemento){
return;
}, $a);

echo '<pre>';
print_r($a);

echo '<hr>';

$array1 =['a' => 'verde', 'amarelo', 'azul', 'vermelho'];
$array2 =['b' => 'verde', 'amarelo', 'vermelho'];

$result = array_diff($array1, $array2);

echo '<pre>';

print_r($result);

echo '<hr>';


$array = ['azul', 'vermelho', 'verde'];

$chave = array_search('vermelho', $array);

echo $chave;

echo '<hr>';


$entrada = [
    'a' =>  'verde',
            'vermelho',
    'b' =>  'verde',
            'azul',
];

$result = array_unique($entrada);

echo '<pre>';
print_r($result);

echo '<hr>';


$array1 = array('cor' => "vermelho", 2, 4);
$array2 = array("a", "b,", "cor" => "verde", "forma" => "triangulo", 4);
$result = array_merge($array1, $array2);


echo '<pre>';
print_r($result);

echo '<hr>';



$os = ["Mac", "NT", "Irix", "Linux"];

if(in_array("Irix", $os)){
        echo "Tem Irix";
    }

if(in_array("mac", $os)){
    echo "Tem mac";

}








?>
