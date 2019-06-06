<?php

$letra = 'c';

if($letra === 'a'){
    echo 'A de Avião';
}elseif($letra === 'b'){
    echo 'B de Bola';
}else if($letra === 'c'){
    echo 'C de Cão.';
}else{
    echo 'Não sei qual a letra.';
}

echo "\n";
echo "-------------------------------";
echo "\n";

if($letra === 'a'):
    echo 'A de Avião';
elseif($letra === 'b'):
    echo 'B de Bola';
//else if($letra === 'c': //else if quando usado com : não é valido quando escrito separado.
//    echo 'C de Cão.';
else:
    echo 'Não sei qual a letra.';
endif;

echo "\n";
echo "-------------------------------";
echo "\n";

//Forma Ternária

$resultado = ($letra === 'c') ? 'Cão' : 'Não é cão';
echo $resultado;