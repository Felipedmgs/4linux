<?php
$variavel = 0;


if (empty($variavel)){
    echo 'esta variavel e considerada vazia!'. '<br>';
    }

echo '<hr>';

$variavel = '';

if(isset($variavel)){
    echo 'Esta variavel é consderada vazia!', '<br>';
    }

echo '<hr>';

$variavel = '';

if(isset($variavel)){
    echo 'Variavel foi inicializada!', '<br>';
    
    } else{
            echo'Variavel não foi inicializada', '<br>';        
        }

echo '<hr>';

$sim = ['isto', 'é', 'um array'];

echo '<hr>';

$nao = 'isto é uma string';

echo is_array($nao) ? 'É um array' : 'Não é um array';

echo '<hr>';





?>
