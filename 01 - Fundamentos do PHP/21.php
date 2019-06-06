<?php

$total = 0;
$i = 1;

while ($i < 10):
    $total += 7;
    $i++;
endwhile;

echo $total;

echo "\n----------------\n";

$i = 0;

while ($i < 10) {
    echo "$i ";
    if($i === 4){
        echo "encerrando o while.";
        break;
        echo "isso jamis será executado";
    }
    $i++;
}

echo "\n----------------\n";

$i = 0;

while ($i < 10){
    if(($i >= 4) AND ($i <= 8)){
        $i++;
        continue;
    }
    echo "O valor de \$i é $i \n";
    $i++;
}

echo "\n----------------\n";

$i = 0;
$j = 0;

while ($i < 10){
    while ($j < 10){
        if( $j == 5){
            break 2; //interrompe os dois laços.
        }
        $j++;
    }
    $i++;
}

echo "{$i} {$j}";

echo "\n----------------\n";

$cpu = 3000;

do{
    echo "Cpu: $cpu Mhz";
    $cpu = $cpu + 200;
} while ($cpu <= 1000);