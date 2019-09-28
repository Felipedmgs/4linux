<?php

function adicionar (&$fruta)
{
    return ++$fruta;
    }


$laranja = 5;

echo adicionar($laranja), '<br>';

echo $laranja;

?>
