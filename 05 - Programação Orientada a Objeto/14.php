<?php

function familia() {
    yield 'Raoni Sporteman';
    yield 'Tainarah';
    yield 'Aria';
}

foreach (familia() as $pessoa) {
    echo $pessoa."\n";
}