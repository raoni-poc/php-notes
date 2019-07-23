<?php
echo true ? 'verdadeiro' : false ? 'v' : 'f';

echo "\n";

echo (bool) (new stdClass) ? (bool) true : (bool) false;

echo "\n";

$resultado = "Feito";
$a = $resultado ?: "Incompleto";
echo $a;











































/**
 * Perceba que nesse exemplo estamos avaliando operadores ternários aninhados.
 * O desenvolvedor é induzido a resolver a expressão à direita (false ? 'v' : 'f')
 * que resultaria em 'f' já que a condição é falsa) e posteriormente executaria o teste
 * restante mais a esquerda (true ? 'verdadeiro' : 'f'), resultando em 'verdadeiro'.
 *
 * Mas os operadores ternários tem um comportamento diferenciado e são avaliados
 * da esquerda para a direita.
 *
 * A ordem correta é:
 *
 * Primeira avaliação: true ? 'verdadeiro' : false
 * que resulta em 'verdadeiro' Substituindo ficaria:
 *
 * echo 'verdadeiro' ? 'v' : 'f'
 * Portanto (boolean)' verdadeiro' é true booleano então o resultado é 'v'
 *
 * Uma releitura mais clara seria:
 *
 * echo (true ? 'verdadeiro' : false) ? 'v' : 'f';
 */