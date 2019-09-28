<?php

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$impares = array_filter($array, function ($valor){
    return ($valor % 2);
    
    });

echo '<pre>';
print_r($impares);

?>
