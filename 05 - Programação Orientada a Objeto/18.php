<?php

trait Colaborador
{
    function PreencherOpinario()
    {
        return "colaboradores";
    }
}

class Pessoa
{
    function PreencherOpinario()
    {
        return "generico";
    }
}

class Estagiario extends Pessoa
{
    use Colaborador;

    function PreencherOpinario()
    {
        return "estagiarios";
    }
}

$colega = new Estagiario;
echo $colega->PreencherOpinario();
