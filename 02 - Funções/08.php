<?php
$s = function (){
    return "Certificamp";
};
echo gettype($s);

echo "\n----------------\n";

$mensagem =   "A V I S O";
$mesagemponto = "!";
$closure = function ($colega) use ($mensagem, $mesagemponto) {
    echo $mensagem.$mesagemponto."\n"."Olá ".$colega;
};
$closure("Raoni Sporteman");

echo "\n----------------\n";

// callback simples que chama a função certificamp() e passa '7.1' como parâmetro
// call_user_func(' certificamp', '7.1');

// chama o método estático meuMetodo() de MinhaClasse
// call_user_func( array(' MinhaClasse', 'meuMetodo'));

// outra forma de chamar método estático (a partir do PHP 5.2.3)
// call_user_func(' MinhaClasse:: meuMetodo');

// chamada metodo meuMetodo() do objeto $ obj 16 $ obj = new MinhaClasse;
// call_user_func( array( $ obj, 'meuMetodo'));