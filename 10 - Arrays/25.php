<?php
class minha_classe
{
    public $meu_valor = array();

    function minha_classe($value) {
        $this->meu_valor[] = $value;
    }

    function set_valor($value){
        $this->meu_valor = $value;
    }
}

$a = new minha_classe('a'); $a-> meu_valor[] = 'b';
$a->set_valor('c'); $a->minha_classe('d');



































/**
 * Primeiramente teremos o método de mesmo nome da classe que será executado assim que ela
 * for instanciada, agindo como o método construtor, para garantir a compatibilidade com códigos antigos.
 * Trata-se de um recurso obsoleto que será extinto nas futuras versões, mas que ainda funciona no PHP 7.1.
 *
 * Na primeira instrução a ser executada o valor a será armazenado no índice 0 do array meu_valor[].
 * Depois b será atribuído no índice 1 de meu_valor[], já que é um atributo público e portanto acessível
 * externamente perante a classe.
 * Ao executar set_valor('c'), o método modifica o array para uma variável e armazena c.
 * Ao invocar o método minha_classe(' d'), a estrutura de meu_valor já não é mais um vetor e portanto
 * ocasiona um: Fatal error: Uncaught Error: [] operator not supported for strings in....
 */
