<?php

namespace raoni\funcoes;

class Mostrar
{
    public function espacoDoNome()
    {
        echo __NAMESPACE__ . "\n";
    }

    public function metodo()
    {
        echo __METHOD__ . "\n";
    }

    public function funcao()
    {
        echo __FUNCTION__ . "\n";
    }
}

$obj = new Mostrar;
$obj->espacoDoNome();
$obj->metodo();
$obj->funcao();