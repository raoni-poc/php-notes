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

echo "\n---------------\n";

$a = 0;
$b = 1;

for ($i = 0; $i < 10; $i++) {
    echo fibonacci($a, $b) . ', ';
}

echo "\n---------------\n";

for ($i = 0, $j = 0; $i <= 20; $i++, $j *= 2 ):
    echo $j . ', ';
endfor;

echo "\n---------------\n";

for(;;){
    echo 'nunca pare';
}