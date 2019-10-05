<?php

if($_POST) {
    echo "ola {$_POST['nome']}!";
    
    echo '<pre>';
    var_dump($_POST);
    
    }



?>

<form method = "post">
    <input type = "text" name = "nome">
    <button type = "submit">Enviar</button>
</form>
