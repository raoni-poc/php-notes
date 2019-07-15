<?php
echo isset($a) ? 'A existe' : ($a = 'a') . ' agora existe';

























































/**
 * O isset($a) retorna false, pois $a não existe.
 * Então o operador ternário executa o código após os dois pontos (:),
 * atribuindo um valor para $a, imediatamente exibindo-o em decorrência
 * do echo inicial.
 */