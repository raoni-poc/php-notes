<?php
echo substr("123456", -4, -2);





































/*
 * A função substr(), como o nome sugere, extrai parte da string.
 * O primeiro argumento é a própria string, o segundo parâmetro é a
 *  posição desejada que começa o pedaço (iniciando na posição zero)
 *  e a terceiro parâmetro (opcional) é o tamanho que se pretende
 * percorrer (length).
 *
 * Quando a posição de começo é identificada com um número negativo,
 * a função conta a partir do fim da string.
 *
 * Quando o tamanho for negativo, indica quantos caracteres serão suprimidos do final.
 * Se não delimitássemos a porção desejada, usando apenas substr("123456", -4),
 * o resultado seria 3456.
 *
 * O -2 de length despreza os últimos dois caracteres (56) retornando apenas 34
 * - que é a resposta que a questão espera.
 */