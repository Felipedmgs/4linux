<?php

session_start();

if(!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else{
    $_SESSION['count']++;
}

echo "[A] Contagem atual: {$_SESSION['count']}";

?>
