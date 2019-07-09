<?php

$a = array( 1, 2, 4, 8);
$b = array( 0, 2, 4, 6, 8, 10);
$m = array_merge( $a, $b);
print_r($m);

$a1 = array("a" => 1, "b" => 2);
$b1 = array("b" => 3, "c" => 4);
$m1 = array_merge($a, $b);
print_r($m1);




































/**
 * Observe que existem valores iguais tanto em $a quanto em $b, como é o caso do 2, 4 e 8.
 * Mesmo assim a função array_merge() adiciona elementos repetidos quando o índice for numérico,
 *
 * Acontece diferentemente quando trabalhamos com índices como string,
 * no contexto de arrays associativos. Nesses casos a função array_merge()
 * sobrescreve os valores do segundo array, caso conflitam
 */