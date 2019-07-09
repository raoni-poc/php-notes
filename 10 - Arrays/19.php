<?php
$a = [1=>'Ari', 3=>'Ariel', 5=>'Ariane'] + ['Neto', 'Paloma', 'Laci'];

echo count($a);













































/**
 * Nessa questão lidamos com operações em arrays.
 * A primeira porção atribui os valores Ari, Ariel e Ariane
 * nos seus respectivos índices, respectivamente 1, 3 e 5.
 *
 * Ao realizar a união (sinal de +) com o segundo array, os índices já
 * ocupados são preservados. Então o valor Neto assume a chave 0 e
 * Laci associa ao índice 2, enquanto que Paloma está vinculada em 1,
 * porém esse elemento já existe no primeiro array (que é Ari).
 */