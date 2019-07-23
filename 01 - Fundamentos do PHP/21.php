<?php
$i = 0;

while ($i < 10){
    if(($i >= 4) AND ($i <= 8)){
        $i++;
        continue;
    }
    echo "O valor de \$i é $i \n";
    $i++;
}


