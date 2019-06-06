<?php
function exibe(){
    global $nome;
    $nome = "Raoni";
    $GLOBALS["cidade"] = "Gramado";
}
exibe();
echo $nome."\n";
echo $cidade;

echo "\n----------------\n";

$titulo = "ZCPE 5.5";
function mostrar(){
    global $titulo;
    $titulo = "ZCE 7.1";
}
echo $titulo;