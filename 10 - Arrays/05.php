<?php

$a = array( 1, 2, 3, 4, 5);
$sa = array_slice($a, 2);
$sb = array_slice($a, 1, 3);
$sc = array_slice($a, 1, 3, true);

var_dump($sa);
var_dump($sb);
var_dump($sc);










































/*
 * array_slice( array, offset) que extrai parte do array.
 * O primeiro parâmetro é o array em questão,
 * o segundo argumento é que elemento começará a sequência que fatia o array
 * (que aparece na documentação como offset),
 * o terceiro parâmetro (opcional) é a quantidade de itens que serão percorridos e
 * o quarto item (também opcional) informa se devemos ou não preservar os índices originais.
 */