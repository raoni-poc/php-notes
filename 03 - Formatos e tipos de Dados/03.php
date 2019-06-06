<?php
/*
$xml é um objeto SimpleXML. Como gravar tal objeto no arquivo saida.xml?

A: simplexml_save_string($xml, "saida.xml");
B: simplexml_save_file($xml, "saida.xml");
C: $xml->saveAs("saida.xml");
D: file_put_contents($xml->asXML(), "saida.xml");
E: Nenhuma das alternativas anteriores







































R.: E
A função file_put_contents() apresentada na alternativa D seria a opção mais próxima,
porém os parâmetros são invertidos: primeiro o arquivo de depois o conteúdo -
gerado pelo método asXML().
Existem funções chamadas simplexml_load_string() e simplexml_load_file().
Já as funções simplexml_save_string() e simplexml_save_file() NÃO EXISTEM.
Na alternativa C, o suposto método saveAs é inexistente no objeto SimpleXML.
Então a resposta correta é E: Nenhuma das alternativas anteriores.
