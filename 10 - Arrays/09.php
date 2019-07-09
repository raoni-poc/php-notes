<?php
$vetor = array(7 => 1, 2, 3);
$vetor[] = 4;
$vetor[2] = 5;
array_pop( $vetor);

var_dump($vetor);










































/*
 * Ao atribuirmos o valor 5 ao $ vetor sob o índice 2, embora numericamente esteja antes dos demais,
 *  na prática o PHP encadeia ao fim do array.
 *
 *  Isso significa que se fôssemos inspecionar o conteúdo de $vetor após a linha 4, ele teria
 *  a seguinte formação: array(7=>1, 8=>2, 9=>3, 10=>4, 2=>5).
 *
 *  Diferente do que poderia se pensar, já que a chave 2 deveria vir antes de todos.
 */