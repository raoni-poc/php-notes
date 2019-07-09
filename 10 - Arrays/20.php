<?php
$certificacoes = array("ZCE 5.3", "ZCPE 5.5", "ZCE 7.1");
$arrayObj = new ArrayObject($certificacoes);

echo $arrayObj->count();

foreach ($arrayObj as $i => $v) {
    echo "Índice: " . $i . " Valor: " . $v . "<br/>";
}
