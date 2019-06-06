<?php
function ordena_meu_array($array)
{
    return sort($array);
}

$a = array(3, 2, 1);
var_dump(ordena_meu_array(&$a));


