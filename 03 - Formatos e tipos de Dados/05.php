<?php
$xml = '<?xml version ="1.0" encoding ="ISO-8859-1"?>
 <estilos>
 <cerveja alcool="5.5" coloracao="13" amargor="30">Pale Ale</cerveja>
 <cerveja alcool="5.5" coloracao="8"  amargor="12">Weiss</cerveja>
 <cerveja alcool="5.0" coloracao="7"  amargor="11">WitBier</cerveja>
 <cerveja alcool="6.0" coloracao="27" amargor="40">Amber Ale</cerveja >
 <cerveja alcool="6.5" coloracao="30" amargor="18">Red Ale</cerveja>
 <cerveja alcool="6.7" coloracao="25" amargor="62">IPA</cerveja>
 </estilos>';

$e = new SimpleXMLElement($xml);
$x = $e->xpath("//cerveja[@amargor > 35]");
