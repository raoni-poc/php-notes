<?php
$vetor = ['a', 'b', 'c'];
[$a, $b, $c] = $vetor;
echo $a;
echo $b;
echo $c;

$identidade = ['nome'=> 'Ari', 'idade'=> 40, 'nacionalidade'=> 'brasileiro'];
['nome'=>$nome, 'nacionalidade'=>$origem, 'idade' => $idade] = $identidade;
echo $nome;











































/*
 * A versão 7.1 o PHP trouxe melhorias na desconstrução de arrays,
 * associando os valores em variáveis de forma automática.
 *
 * Desde a versão 4 do PHP, essa associação só seria possível substituindo a linha
 *
 * [$a, $b, $c] = $vetor;
 * por
 * list($a, $b, $c) = $vetor;
 *
 * Lembrando que list muitas vezes é chamada erroneamente de função,
 * sendo que tecnicamente é uma construção da linguagem PHP.
 */