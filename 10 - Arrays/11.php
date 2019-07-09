<?php

$certificacoes = array("ZCPE"=>"Zend", "CSM"=>"Scrum Alliance", "MCP"=> "Microsoft");

function escreveItens($valor, $chave) {
    echo $chave." ".$valor."<br>";
}

array_walk( $certificacoes, 'escreveItens');

echo "\n";

array_walk( $certificacoes, 'escreveItens', "Ari");




































/**
 * O callback também aceita argumentos. Basta passar como parâmetro(s) extra(s) na função array_walk().
 * Uma construção interessante é passar um objeto como segundo parâmetro da função array_walk(),
 * fazendo com que seja executado como $obj(), invocando o método mágico __invoke():
 *
 * $obj = new MinhaClasse;
 * $vetor = array("ZCE", "SCM", "MCP");
 * array_walk($vetor, $obj); // chama três vezes o método __invoke
 */