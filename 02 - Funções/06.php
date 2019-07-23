<?php
$certificacoes = ['ZCE', 'ZCPE', 'MCP', 'CSM'];
function &tragaUma($n){
    global $certificacoes;
    return $certificacoes[$n];
}

$titulo =& tragaUma(1);
$titulo = "Zend Certified PHP Engineer";
echo $certificacoes[1];









































/**
 * Neste código, a função tragaUma(x) é como um alias para $certificacoes[x],
 * ao invés de copiar seu valor simplesmente - porque associamos por referência.
 *
 * A variável $titulo é um apontamento para $certificacoes[1],
 *
 * portanto ao modificar $titulo estaremos mexendo no índice 1 do array $certificacoes.
 */