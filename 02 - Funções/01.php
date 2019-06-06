<?php

function argumentos($arg1, int $arg2, string $arg3 = ''){
    var_dump(func_num_args());
    var_dump(func_get_arg(2));
    var_dump(func_get_args());
}


argumentos('teste', 8, '5');
