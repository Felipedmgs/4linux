<?php
$pessoas =[

[
    'nome' => 'Paulo Antunes',
    'dataNascimento' => '1985-05-13',
    'email' => 'paulo.antunes@gmail.com'
],
[
    'nome' => 'Joana Nascimento',
    'dataNascimento' => '1978/67/05',
    'email' => 'joana@email.com'
]

];

foreach ($pessoas as $chave => $pessoa){
    echo '<hr>';
    echo "Pessoa => $chave<br>";
    
    foreach ($pessoa as $campo => $dado){
        echo "$campo: $dado<br>";    
    }
}


?>
