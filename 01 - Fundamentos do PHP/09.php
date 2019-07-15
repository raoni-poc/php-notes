<?php
$p = "PHP";
$P = "php";

echo ($p < $P) + 2 * ($p > $P) + 3 * ($p == $P);



















































/*
 * A conversão é realizada considerando o código ASCII dos caracteres, mais especificamente
 * do primeiro (que é o mais significativo).
 *
 * Atente-se que a variável minúscula $php é quem recebe o valor em maiúsculo e vice-versa,
 *
 * sendo que os caracteres maiúsculos vem antes na tabela ASCII e consequentemente
 * tem um número menor associado,
 */