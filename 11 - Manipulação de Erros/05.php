<?php
$a = 0;
switch (true) {
    default:
        $a +s= 1;
        break;
    default:
        $a += 2;
        break;
}
echo $a;







































/*
 * Antes do advento do PHP 7.0 poderíamos executar esse código resultando no valor 2,
 * sem provocar erros.
 *
 * Hoje o PHP identifica as múltiplas declarações default e dispara um erro fatal,
 * interrompendo imediatamente a execução. Portanto a alternativa E é a resposta correta.
 */
