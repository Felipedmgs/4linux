<?php

require 'verifica_login.php';
require 'conexao.php';

if(! isset($_GET['id'])){
        header('location: listar_usuarios.php');
        exit();            
    }
    
    $id = $_GET['id'];
    
    $query = "DELETE FROM usuarios WHERE id = $id";
    
    $retorno = pg_query($query);
    
    if($retorno){
            header('location: listar_usuarios.php');
    }
    
?>
