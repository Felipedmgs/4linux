<?php

if($_POST) {
    echo "ola {$_FILES['nome']}!";
    
    echo '<pre>';
    var_dump($_FILES);
    
    }



?>

<form method = "post" enctype= "multpart/form-data">
    <input type = "file" name = "arquivo">
    <button type = "submit">Enviar</button>
</form>
