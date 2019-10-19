<?php

// Uso muito comum antes da introducao do null coalescing (PHP7)
$nome = isset($_GET)['nome']) ? $_GET['nome'] : 'Semnome';

echo $nome;

echo '<hr>';

//funcao empty() é mais adequada
//pois só retorna true se a variavel contiver null, ''. 0
$nome = !empty($_GET['nome']) ? $_GET['nome'] : 'Sem nome';
echo $nome

echo '<hr>';

//null coalescing em acao
$nome = $_GET['nome'] ?? 'Sem nome';
echo $nome;



?>
