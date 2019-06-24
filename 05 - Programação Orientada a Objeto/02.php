<?php

$objeto1 = new stdClass();
$objeto2 = $objeto1;
$objeto3 = clone $objeto1;

$objeto1->content = 'Ari';

var_dump($objeto1);
var_dump($objeto2);
var_dump($objeto3);