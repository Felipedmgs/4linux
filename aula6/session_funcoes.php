<?php

session_start();

$status = [
    0 => 'Sessoes desabilitadas',
    1 => 'Sessoes habilitadas [Nenhuma crianca]',
    2 => 'Sessoes habilitadas [Uma criada]'
];

echo 'Status da sessao: ' . $status[session_status();

?>
