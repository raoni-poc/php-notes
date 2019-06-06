<?php
// função variádica | variadic functions
function SomaTrajeto(... $paradas){
    $total = 0;
    foreach ($paradas as $valor){
        $total += $valor;
    }
    return $total;
}

echo somaTRAJETO(1, 2, 3);