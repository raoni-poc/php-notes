<?php
function cresce($tamanho){
    $tamanho .= "bigger ";
    $tamanho = encolhe($tamanho);
    return $tamanho;
}
function encolhe(&$tamanho){
    $tamanho .= "smaller ";
    return $tamanho;
}

$tamanho = "normal ";
$tamanho .= cresce($tamanho);
echo $tamanho;