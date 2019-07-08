<?php
function count($a, &$b){
        if($a > $b)
            {
                count($a--, ++$b);
                return;
            }
}
$a = 5;
$b = 2;
count($a, $b);





































/**
 * Mas a malícia dessa pergunta é o próprio
 * nome da função que colide com a função nativa count() do PHP e,
 * portanto, não permite que seja redeclarada.
 * Nesse Caso tens que preencher no campo aberto: Fatal Error
 */
