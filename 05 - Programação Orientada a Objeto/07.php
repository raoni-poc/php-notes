<?php

class A {
    protected $a = 1;
    function a() { echo $this->a++; }
}

class B extends A {
    protected $a = 10;
    function b() {echo $this->a++;  $this->a();}
}

$b = new B;
$b->b();

