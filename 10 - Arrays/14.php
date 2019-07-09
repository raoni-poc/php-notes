<?php
$a = array("arquivo9.pdf", "arquivo10.pdf", "arquivo11.pdf");
sort( $a);

$b = array("arquivo9.pdf", "arquivo10.pdf", "arquivo11.pdf");
sort( $b, SORT_NATURAL);

var_dump($a);
var_dump($b);









































/*
 * a função sort() realiza uma ordenação ASCII, baseada nos caracteres que formam os nomes.
 * Significa que a string arquivo10 vem antes da arquivo9, já que 1 < 9.
 *
 * Para corrigir esse problema, podemos passar a constante SORT_NATURAL como argumento
 * extra na função sort().
 *
 * Outras funções específicas para essa finalidade, que utilizam heurísticas e outras técnicas,
 * são: natsort(), natcasesort(), strnatcmp() e strnatcasecmp(). Mais informações em
 * https://github.com/sourcefrog/ natsort.
 */


