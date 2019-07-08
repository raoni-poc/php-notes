<?php
$palheiro = "abcdefg";
$agulha = "abc";

if(strpos($palheiro, $agulha) !== false){
    echo "Encontrou";
} else {
    echo "Não Encontrou";
}