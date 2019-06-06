<?php
$certificacoes = ['ZCE', 'ZCPE', 'MCP', 'CSM'];
function &tragaUma($n){
    global $certificacoes;
    return $certificacoes[$n];
}

$titulo =& tragaUma(1);
$titulo = "Zend Certified PHP Engineer";
echo $certificacoes[1];