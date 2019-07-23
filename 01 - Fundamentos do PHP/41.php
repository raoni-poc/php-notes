<?php
function fibonacci(&$x1 = 0, &$x2 = 1)
{
    $result = $x1 + $x2;
    $x1 = $x2;
    $x2 = $result;
    return $result;
}

for ($i = 0; $i < 10; $i++) {
    echo fibonacci() . ', ';
}





































/**
 * perceba que não passamos argumentos, portanto $x1 e $ x2 assumem valores default,
 * respectivamente 0 e 1.
 */