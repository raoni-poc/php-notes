<?php
echo count(range( 7.0, 5.0, 0.16));















































/*
 * range() funciona também na ordem reversa, do maior para o menor.
 * é importante utilizarmos o erasable board para não haverem dúvidas.
 *  Fazendo as contas teremos 7, 6.84, 6.68, 6.52, 6.36, 6.2, 6.04, 5.88, 5.72, 5.56, 5.4, 5.24 e 5.08.
 * A resposta correta é C: 13, já que existem 13 elementos no array
 * - sempre contando os elementos de início e fim, inclusive.
 */