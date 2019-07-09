<?php
$s = array(5, "43", "27", 3);
sort($s);

$a = array(5, "43", "27", 3);
asort($a);

$ar = array(5, "43", "27", 3);
arsort($ar);

$k = array(5, "43", "27", 3);
ksort($k);

$kr = array(5, "43", "27", 3);
krsort($kr);

$r = array(5, "43", "27", 3);
rsort($r);

$u = array(5, "43", "27", 3);
usort($u);

var_dump($s);
var_dump($a);
var_dump($ar);
var_dump($k);
var_dump($kr);
var_dump($r);
var_dump($u);





































/*
 * sort() altera os índices do array.
 * asort() preservar a relação chave-valor.
 * arsort() Ordena o array de forma decrescente, mantendo os índices
 * ksort() Ordena pelas chaves
 * krsort() Ordena pelas chaves, de trás para frente
 * rsort() Ordena o array de forma reversa
 * usort() Ordenação baseado numa função de usuário, disparada por callback
 */


