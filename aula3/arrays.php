<?php
echo '<pre>';

$pessoas = array(
        'João',
        'Maria',
        'Pedro'
);

echo '<pre>';
print_r($pessoas);

echo '<hr>';
var_dump($pessoas);
echo '<br>';

echo $pessoas [2];

$pessoas [40] = 'Daniel';

$pessoas [] = 'na cova dos leões';
var_dump($pessoas);

?>
