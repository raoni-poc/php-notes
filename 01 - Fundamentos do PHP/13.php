<?php
$saudacao = "ola";
$ola = "mundo";

$pais = "Brasil";
$$pais = "Portugal";

echo $$saudacao." ".$Brasil;



























/**
 * A questão é sobre variavéis variavéis,
 *
 * Por conta de na primeira linha termos o trecho $saudacao = 'ola', a variavel $$saudacao ira obtar o valor da variavél $ola que será igual a  'mundo',
 *
 * De forna anologa a variavél $Brasil obterá seu valor da variavel $$pais, isso é defino em $pais = "Brasil" seguido de $$pais = "Portgual"
 *
 * O resultado será mundo Portugual
 */
