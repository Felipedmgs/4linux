<?php

while (list(, $val) = each($arr)){
    if ($val == 'para'){
        break;
    }
        echo "$val<br>\n";
}

function ptrintArray($array){
    foreach ($array as $i){
        if ($i ==='para'){
        break;
    }
    echo $i. '<br>' . "\n";
    }
}

$array1 = ['um', 'dois', 'treis', 'quatro', 'cinco',];
$array2 = ['um', 'dois', 'treis', 'quatro', 'cinco',];

printArray($array1);
printArray($array2);




?>
