<?php

$nome = 'Carlos Souza';

$setor = [
    'dev' => 'PHP',
    'ops' => 'Docker'
];

//Nao concatenadas
echo "$nome do setor de {$setor['dev']}<br>";
echo "{$nome} do setor de {$setor['ops']}<br>";

//concatenadas
echo $nome . 'do setor de ' . $setor['dev'] . '<br>';
echo $nome . 'do setor de ' . $setor['dev'] . '<br>';

?>
