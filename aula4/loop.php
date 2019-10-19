<?php

if($idade >= 18){
    echo "Esta mensagem só será exibida se a condicao for verdadeira";
    
}else{
    echo "Mensagem exibida se condicao for falsa";
}

echo '<hr>';

if($idade >= 21){
        echo 'Esta mensagem só sera exibida se a condicao for verdadeira';
    } else if ($idade>=18){
            echo 'Avaliacao de uma condicao extra.';
    }

?>
