<?php
$a = array( 073, 0103, 0113, 0123, 073);
$b = array( 73, 83, 93, 103);
echo count(array_diff($a, $b));













































/**
 * Primeiramente observe os valores do array $a e veja que todos começam com o dígito 0 (zero).
 * Significa que estão em base octal.
 *
 * Para algum desavisado, possivelmente seria levado a crer que o PHP faria um type juggling
 * transformando 073 em 73, mas não é como acontece. Relembrando as conversões,
 * vamos transformar 73 em base octal para o seu correspondente em base decimal:
 *
 * octogal = decimal
 * 73 = 59
 * 123 = 83
 *
 * E perceba que o elemento 073 aparece DUAS vezes no vetor $a, e a função array_diff() conta também.
 *
 * Analisando elemento por elemento, teremos: 073 que não existe no array $b,
 * portanto entra no diff, o 0103 (67 decimal) também difere, 0113 (75 decimal) não existe
 * em $b e novamente o 073.
 *
 * Contando teremos 4 elementos.
 *
 * O valor 0123 tem seu equivalente em $b(83 decimal), mas não difere e também não contabiliza
 * no count()
 */