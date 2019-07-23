<?php

function fibonacci(&$x1 = 0, &$x2 = 1)
{
    $result = $x1 + $x2;
    $x1 = $x2;
    $x2 = $result;
    return $result;
}

$a = 0;
$b = 1;

for ($i = 0; $i < 10; $i++) {
    echo fibonacci($a, $b) . ', ';
}







































/*

A cada loop

$x1: 1, $x2: 1 , $result: 1
$x1: 1, $x2: 2 , $result: 2
$x1: 2, $x2: 3 , $result: 3
$x1: 3, $x2: 5 , $result: 5
$x1: 5, $x2: 8 , $result: 8
$x1: 8, $x2: 13 , $result: 13
$x1: 13, $x2: 21 , $result: 21
$x1: 21, $x2: 34 , $result: 34
$x1: 34, $x2: 55 , $result: 55
$x1: 55, $x2: 89 , $result: 89

 */