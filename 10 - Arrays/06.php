<?php
$a = array( 1, 2, 3, 4, 5);
$sa = array_slice($a, -3);
$sb = array_slice( $a, -3, -2);

var_dump($sa);
var_dump($sb);






































/*
 * A função array_slice() permite que o offset e o número de elementos sejam negativos.
 * O efeito do offset negativo é semelhante ao comportamento da função substr(): devolve o número
 * de itens do fim para o início. Ex.: se o offset for -3 retorna os três últimos elementos do array.
 *
 * Já o length (tamanho) negativo remove o últimos itens do array de acordo com o número especificado.
 */