<?php
$frameworks = array(
    array("ZendFramework", "ZF2 Certified Architect", "ZFTool"),
    array("Symfony", "Symfony Certified Developer", "Console"),
    array("CakePHP", "Certified CakePHP Developer", "Bake"),
    array("Laravel", "Laravel Certified Developer", "Artisan")
);

echo "Framework: ".$frameworks[1][0]."\n";
echo "Certificação: ".$frameworks[1][1]."\n";
echo "Linha de comando: ".$frameworks[1][2]."\n";

$frameworks = array (
    array("nome"=>"ZF2", "console"=>"ZFTool", "psr"=> array(7)),
    array("nome"=>"Symfony", "console"=>"Console", "psr"=>array(1, 2, 4)),
    array("nome"=>"CakePHP", "console"=>"Bake", "psr"=>array(1, 2)),
    array("nome"=>"Laravel", "console"=>"Artisan", "psr"=>array(2))
);

echo "Framework: ".$frameworks[1]['nome']."\n";
echo "Nível de PSR: ".$frameworks[1]['psr'][2];
