<?php

class Atividade
{
    public static function executa()
    {
        return self::exibeNome();
    }

    private static function exibeNome()
    {
        return 'Atividade';
    }
}

class Passeio extends Atividade
{
    public static function exibeNome()
    {
        return 'Passeio';
    }
}

echo Atividade::executa();
echo Passeio::executa();