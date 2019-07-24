<?php
function cresce($tamanho){
    $tamanho .= "bigger ";
    $tamanho = encolhe($tamanho);
    return $tamanho;
}
function encolhe(&$tamanho){
    $tamanho .= "smaller ";
    return $tamanho;
}

$tamanho = "normal ";
$tamanho .= cresce($tamanho);
echo $tamanho;





































/**
 * A malícia dessa questão está na tentativa de confundir com a definição de função
 * encolhe(&$tamanho), passando $ tamanho por referência.
 *
 * Na prática o resultado não mudaria, já que estamos sobrescrevendo a variável $tamanho
 * no contexto interno relativo a função cresce().
 *
 * Fazendo o teste de mesa, teremos:
 *
 * $tamanho (externo)            $tamanho (interno)       Explicação
 * normal                                                 Atribuição inicial
 *  
 *                               normal                   Chama a função cresce() e concatena
 *                               bigger    
 *
 *                              normal                    Chama a função encolhe() e altera por referência
 *                              bigger
 *                              smaller  
 *
 *                              normal                      Retorna a execução para cresce() e sobrescreve
 *                              bigger                      - mantendo o mesmo conteúdo
 *                              smaller
 *
 * normal normal
 * bigger
 * smaller                                                Retorna para o fluxo normal do código, concatenando
 *
 *Assim sendo, nessa questão a alternativa correta é normal normal bigger smaller.
 */