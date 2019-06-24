<?php
function generatorA(){
    yield "a";
    $gB = yield from generatorB();
    yield "g";
    return $gB;
}

function generatorB(){
    yield "b";
    $gB = yield from [" c", "d", "e"];
    yield "f";
    return "Gerado a partir de generatorB";
}

$gen = generatorA();

foreach ($gen as $elemento){
    echo $elemento."\n";
}

echo $gen->getReturn();