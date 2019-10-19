<?php
session_start();



/*Destroi apenas a sessao de autenticacao, para os casos em que tem lista de compras, 
 * ele é deslogado, mas se ele logar a lista estara lah.
unset($_SESSION['logado']);
unset($_SESSION['usuario']);
*/


session_destroy();

header('location: login.php');

?>
