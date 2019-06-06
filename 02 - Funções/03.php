<?php //desempacotamento de argumentos - argumento unpack

function adiciona ($a, $b, $c, $d){
    return $a + $b + $c + $d;
}

$elements = [2,3,4];
echo adiciona(1, ...$elements);