<?php

$vetor = array(7 => 1, 2, 3);
$vetor[] = 4;
$vetor[2] = 5;
array_unshift( $vetor, 6);

echo $vetor[7];











































/**
 * O array_unshift() reorganiza o array, modificando completamente os índices,
 * partindo do 0 (zero) como primeiro elemento, 1 para o segundo valor e assim por diante.
 *
 * Significa que ao escrever o conteúdo da chave 7 (que antes constava o valor 1),
 * agora já não existe mais. O array ficou, ao término da execução,
 *
 * nesse formato: array(0=> 6, 1=> 1, 2=> 2, 3=> 3, 4=>4, 5=> 5).
 *
 * Portanto o índice 7 é null
 */