<?php

$i = 1;

switch ($i){
    case 0:
        echo '$i é igual a 0';
        break;
        
    case 1:
        echo '$i é igual a 1';
        break;
    case 2:
        echo '$i é igual a 2';
        break;
}

echo '<hr>';


$fruta = 'laranja';
    
switch ($fruta){
    case 'maca':
        echo '4fruta é macã';
        break;
    case 'laranja':
        echo '$fruta é laranja';
        break;
    case 'limao':
        echo '$fruta é limao';
        break;
}

echo '<hr>';

$i = 1;

switch ($i){
    case 0:
    case 1:
    case 2:
        echo '$i é menor que 3, mas não é negativo';
        break;
    case 3:
        echo '$i é 3';
        
}

echo '<hr>';

switch ($i){
    case 0:
        echo '$i é igual a 0';
        break;
    case 1:
        echo '$i é igual a 1';
        break;
    case 2:
        echo '$i é igual a 2';
        break;
    default:
        echo '$i não é igual a 0, 1 ou 2';
        
 }


?>
