<?php
echo true ? 'verdadeiro' : false ? 'v' : 'f';

echo "\n";

echo (bool) (new stdClass) ? (bool) true : (bool) false;

echo "\n";

$resultado = "Feito";
$a = $resultado ?: "Incompleto";
echo $a;