<?php
define("PI", 3.14159);

class Arquimedes
{
    const PI = PI;
}

class Matematica
{
    const PI = Arquimedes::PI;
}

echo Matematica::PI;
