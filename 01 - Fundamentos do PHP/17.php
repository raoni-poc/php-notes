<?php
echo @("3" + 5 * "0x02");
echo "\n";
$a = array('a', 'b' => 'c');
echo property_exists((object) $a, 'a') ? 'verdadeiro': "falso";
echo "\n";
echo property_exists((object) $a, 'b') ? 'verdadeiro': "falso";