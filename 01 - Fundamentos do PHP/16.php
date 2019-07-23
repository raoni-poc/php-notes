<?php
echo @("12x" * 1);
echo ", ";
echo @("1.2x" * 1);
echo ", ";
echo @("12E-1x" * 1);
echo ", ";
echo @("08x" * 1);
echo ", ";
echo @("E1x" * 1);

















































/*
 * No type juggling o PHP examina a string da esquerda para a direita até encontrar
 * um caractere inválido.
 */