<?php

function negrito($texto)
{
    return "<STRONG>texto</STRONG>";
    
}

echo negrito ('olá Mundo');

echo '<hr>';




function imc($peso, $altura)
{
    return $peso / ($altura * $altura);
    }

echo imc(120, 1.85);

echo '<hr>';

function iogurteira($sabor, $tipo = 'azeda')
{
    return "Fazendo uma taca de $sabor $tipo";
}

echo iogurteira('framboesa'), '<br>';
echo iogurteira ('morango', 'com chantilly'), '<br>';

?>
