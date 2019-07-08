<?php
$html = '<body><h1>Texto</h1><br/><p id ="1">Oi</p><hr width="100%"> </body>';
$htmlpadrao = '<p id ="1">Oi</p>';
$htmlRegExp = preg_quote($htmlpadrao, "/");
$texto = preg_replace("/". $htmlRegExp."/", "<i>Texto ocultado</i>", $html);

echo $texto;



















































/*
 * No exemplo acima, estamos usando como delimitador o / (barra) no início e fim da expressão regular,
 *  mas nada impede de utilizarmos outros caracteres.
 *
 *  Observe que estamos passando a / como segundo parâmetro de preg_quote() para escapar
 * inclusive esse caractere, caso o encontre.
 *
 * Pois se não o fizéssemos, o /p do pattern seria entendido como fim da RegExp e provocaria erro,
 * já que não existe um modificador p.
 */