<?php
function gen()
{
    for ($i = 0; $i <= 3; $i++)
        yield $i;
}

$generator = gen();
if (is_array($generator))
    echo "Array";
elseif(is_object($generator))
    echo "Objeto";
else echo "Nenhuma das duas";

