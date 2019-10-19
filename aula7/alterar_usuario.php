<?php

require 'verifica_login.php';
require 'conexao.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Starter Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
    body {
        padding-top: 5rem;
    }
    .starter-template {
      padding: 3rem 1.5rem;
      
    }

      
      
      
    </style>
    <!-- Custom styles for this template -->
    <link href="" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<main role="main" class="container">

  <div class="starter-template">
    <h1>Inserindo novo Usuários</h1>
        <?php
            if(! isset($_GET['id'])){
                    header('location: listar_usuarios.php');
                    exit();                
            }
            
            $id = $_GET['id'];
            
            $query = "SELECT * FROM usuarios WHERE id = $id";
            
            $retorno = pg_query($query);
            
            $usuario = pg_fetch_assoc($retorno);
            
            if(! $usuario){
                header('location: listar_usuarios.php');
            }
        
        ?>
    
    
 
        <form method="post" action="">
            <div class="form-group">
            <label for="exampleInputName">Nome</label>
            <input type="text" name ="nome" value="<?= $usuario['nome']?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
            
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name ="email" value="<?= $usuario['email']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" name ="senha" value="<?= $usuario['senha']?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          
          <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
         
         
         <?php 
         
         #altera dados no banco de dados
            if($_POST){
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    $query = "UPDATE usuarios set nome='$nome', email='$email', senha='$senha' WHERE id=$id";
                    $retorno = pg_query($query);
                    
                    if($retorno){
                        header('location: listar_usuarios.php');
                    }
            }
         ?>
    
 

  </div>

</main><!-- /.container -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</body>
</html>
