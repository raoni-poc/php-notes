<?php
/*
<?xml version ="1.0" encoding ="ISO-8859-1"?>
<html>
<head>
    <title>Extensible Markup Language</title>
</head>
<body>
    <address>
        <cite>Autor A </cite>
        <code>codigo PHP</code>
        <del>script</del>
    </address>
    <address>
        <cite>Autor B</cite>
        <code>codigo C++</code>
        <del>compilado</del>
    </address>
</body>
</html>

Considerando que a variável $xml foi atribuída com o conteúdo acima, através da
função simplexml_load_file(), como exibir o conteúdo "Autor B":

A: echo $xml->body->address->cite[1];
B: echo $xml->body->address[1]->cite;
C: echo $xml->xpath("/html/body/address[1]/cite");
D: echo $xml->xpath("/html/body/address[cite ='Autor B']");
E: Não é possível pois trata-se de um documento XHTML (
   montado para visualização em navegadores) e não um XML puro.





























R.: B