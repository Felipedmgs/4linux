<?php

$uf = 'SP';

/**
 * Parametros patra a fncao setcookie
 * setcookie(name, vaslue, expire, path, domain, secure, httponly)
 */
 
 setcookie('uf', $uf);
 setcookie('uf', $uf, time() + 3600); //Expira em uma hora
 setcookie('uf', $uf, time() + 3600, '/cookie/', '.exemplo.com', 1, 1);

?>
