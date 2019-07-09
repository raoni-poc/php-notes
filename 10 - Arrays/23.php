<?php
$array = array(0.1 => 'a', 0.2 => 'b');
echo count($array);














































/*
 * Os índices do array não aceitam float, portanto 0.1 será convertido para integer(0).
 * O mesmo acontece com 0.2, consequentemente o valor b vai sobrescrever a.
 *
 * Significa que vai sobrar apenas um elemento no array, então a função count() contará 1
 * elemento.
 *
 * Diferentemente seria o array('0.1' = > 'a', '0.2' = > 'b') que mantém os índices como string
 * e portanto diferencia ambos os índices, contando 2.
 *
 * Pegando um exemplo da documentação oficial
 * https://secure.php.net/manual/pt_BR/language.types.array.php,
 * veja que todos os índices serão convertidos automaticamente para integer(1)
 * prevalecendo o último valor inserido, nesse caso string("d"). Ex.:
 *
 * $array = array(
 *   1 => "a",
 *   "1" => "b",
 *   1.5 => "c",
 *   true = > "d",
 * );
 *
 * var_dump($array);
 *
 * A saída do código acima será:
 * array(1) {
 *  [1]=>
 *  string(1) "d"
 * }
 */