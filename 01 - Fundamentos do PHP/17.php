<?php
echo @("3" + 5 * "0x02");
echo "\n";
$a = array('a', 'b' => 'c');
echo property_exists((object) $a, 'a') ? 'verdadeiro': "falso";
echo "\n";
echo property_exists((object) $a, 'b') ? 'verdadeiro': "falso";



























/**
 * A primeira instrução que chama a atenção é "0x02". Sabemos que valores iniciados por 0x
 * são identificados como hexadecimais - mesmo assim o 2 hexadecimal equivale a 2 decimal.
 * Mas o crítico nesse caso são as aspas duplas externas que a identificam como uma string.
 * Ao realizar a operação de multiplicação, o PHP faz a conversão automática transformando
 * "0x02" em (integer) 0, sendo que a multiplicação por 5 resulta em 0. Sendo o valor da linha 3
 *
 * Na Segunda linha 'a' será realizada na chave '0'.
 *
 * Ao converter o array em objeto, os índices transformam-se em atributos portanto teremos
 * [0]=>'a', ['b'] => 'c'
*/