<?php
try {
    class MinhaExcecao extends Exception {};
    try {
        throw new MinhaExcecao;
    }
    catch (Exception $e) {
        echo "1:";
        throw $e;
    }
    catch(MinhaExcecao $e) {
        echo "2:";
        throw $e;
    }
}
catch (Exception $e) {
    echo get_class($e);
}



































/*
 * Dentro do try mais interno, observe que o código instancia deliberadamente um objeto de
 * MinhaExcecao.
 * Segundo a comportamento descrito na documentação oficial,
 * o primeiro catch (da classe pai Exception) é quem se encarrega de tratar o referido erro,
 * mostrando 1:,
 * disparando o erro novamente para o catch posterior.
 * Ao exibir o nome da classe, através da função get_class(), daí obtém-se MinhaExcecao que
 * é o nome da classe filha. Portanto a resposta correta é 1: MinhaExcecao.
 */
