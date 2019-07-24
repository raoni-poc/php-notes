<?php
function ordena_meu_array($array)
{
    return sort($array);
}

$a = array(3, 2, 1);
var_dump(ordena_meu_array(&$a));









































/**
 * Essa é outra questão que ludibria o aspirante ao título ZCPE.
 * O código insinua que visualizaremos um array ordenado, o que é falso.
 * Com alguma perspicácia sabemos que a passagem de valores por referência requer
 * que seja previamente especificado na definição da função e não na chamada da função
 * - como mostra o código. Desde a versão 5.4 do PHP não é mais permitido passar
 * argumentos por referência na chamada de funções. Para que o código funcionasse a
 * contento seria necessário alterar a definição da função, mudando para function
 * ordena_meu_array(&$array) e assim evitar um Parse error.
 */


