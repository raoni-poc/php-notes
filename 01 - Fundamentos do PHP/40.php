<?php
$cpu = 3000;

do{
    echo "Cpu: $cpu Mhz";
    $cpu = $cpu + 200;
} while ($cpu <= 1000);