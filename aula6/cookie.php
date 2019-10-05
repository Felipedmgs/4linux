<?php

setcookie('nome', 'Isabella');

if ($_COOKIE) {
    echo "Olá {$_COOKIE['nome']}!";
    
    echo '<pre>';
    var_dump($_COOKIE);
    
    }



?>
