<!DOCTYPE html>


<html>

    <header>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>Formulários</title>
        <meta name="viewport" content="width=device, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css">
        <script src="main.js"></script>
    </header>

    <body>
        <form action = "processa.php" method = "post">
            <label for = "nome">Nome</label>
            <input type = "text" name = "nome">
            <label for = "email">E-mail</label>
            <input type = "email" name = "email">
            <button type = "submit">Enviar</button>
        </form>

    </body>  

</html>
