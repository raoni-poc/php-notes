<?php

function depois($a){
    $a = "Depois ". $a;
}

function antes(&$a){
    $a = $a." antes";
}

depois(antes($a));
echo $a;