<?php
declare(strict_types=1);

function imc(int $peso, float $altura)
{
    return $peso / ($altura * $altura);
    
    }
    
    echo imc(120, 1.85);


?>
