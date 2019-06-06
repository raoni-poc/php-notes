<?php
/*
Se quisermos adicionar uma nova característica a cerveja,
qual seria a instrução correta a ser substituída?

<?php
$xmlstr = <<<XML
<?xml version ='1.0'?>
    <cerveja>
        <estilo>Irish Red Ale</estilo>
        <caracteristica>Aroma de biscoito e caramelo</caracteristica>
    </cerveja>
XML;

$xmlObj = simplexml_load_string($xmlstr);

??????????????????????

echo $xmlObj->asXML();?>

A: $xmlObj->cerveja->addChild("caracteristica", "Coloração âmbar");
B: $xmlObj->addChild(new SimpleXMLElement("caracteristica", "Coloração âmbar"));
C: $xmlObj->cerveja[0]->addChild("caracteristica", "Coloração âmbar");
D: $xmlObj->xpath(new SimpleXMLElement("caracteristica", "Coloração âmbar"));
E: $xmlObj->addChild("caracteristica", "Coloração âmbar");
F: $xmlObj->cerveja[0]->addChild(new SimpleXMLElement("caracteristica", "Coloração âmbar"));




















R.: E
