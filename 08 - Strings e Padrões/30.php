<?php
$conteudo = "<p>Currículo:<ul><li>ZCPE</li><li>ZFCA</li><li>CSM</li></ul></p><p>Bio</p>";

$padrao = "/<.*>/";
$comparacoes = array();
$achou = preg_match_all($padrao, $conteudo, $comparacoes);

echo ($achou) ? "ACHOU" : "NÃO ACHOU";
echo "\n";

var_dump($comparacoes);
