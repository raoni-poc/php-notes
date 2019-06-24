<?php
/*

O método especialistas() retorna os desenvolvedores responsáveis por cada framework.
De acordo com o código abaixo, como obter o especialista em ZendFramework2 “ZF2”?

class Developers {
    public static function Especialistas()
    {
        return [
            'ZF2' => 'Ari Junior',
            'Laravel' => 'Michaelsen',
            'Code Igniter' => 'Oddy Silva',
             'Symfony' = > 'Renato'
        ];
     }
}

Assinale as alternativas corretas:

A: echo Developers::Especialistas()['ZF2'];
B: echo (new Developers)->Especialistas()['ZF2'];
C: $dev = new Developers; echo $dev->Especialistas()['ZF2'];
D: Não pode instanciar pois o método Especialistas() é estático

























R.: A, B, C