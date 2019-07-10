<?php
function precoTotal($parcela, $vezes)
{
    return $parcela * $vezes;
}

try {
    precoTotal(12);
} catch (Exception $e) {
    echo "A";
} catch (ArgumentCountError $ace) {
    echo "B";
} catch (DivisionByZeroError $dbze) {
    echo "C";
}





































/*
 * O PHP 7.1 incorporou exceções com a classe ArgumentCountError que trata problemas
 *  de discrepância de argumentos perante a assinatura definida em funções e métodos.
 * Ao tentar (try) executar a função precoTotal( 12) o catch de ArgumentCountError é
 * disparado pois falta um parâmetro, escrevendo B na tela.
 */