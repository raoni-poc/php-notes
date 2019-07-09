<?php
$myArray = array("Three" => 3, "Two" => 2, "One" => 1);
sort( $myArray);
$keys = array_keys($myArray);
echo $keys[0];




















































/*
 * A saída do código acima é 0.
 *
 * O ponto crucial nesse script é a função sort() que ordena o vetor baseando-se no valor,
 * desconsiderando os índices vigentes (Three, Two e One) e atribuindo chaves numéricas
 * - iniciando em 0 (zero).
 *
 * A ordenação por sort() modifica totalmente os índices, sendo que a primeira chave
 * torna-se 0.
 *
 * Na sequência, a função array_keys() devolve outro array contendo índices em seus valores,
 * resultando no array(0 => 0, 1 => 1, 2 => 2).
 *
 * Um comportamento plenamente aceitável, que muitos até se confundiriam, seria o código ordenar
 * o array como ("One" = > 1, "Two" = > 2, "Three" = > 3). Mas essa saída ocorreria
 * se usássemos a função asort().
 */