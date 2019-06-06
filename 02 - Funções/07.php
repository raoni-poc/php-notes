<?php
//Analisando o código a seguir, qual linha deve ser alterada para que a saída seja\ 2:
class A {
    protected $x = array(); /* Linha A */
    public function getX() { /* Linha B */
        return $this-> x; /* Linha C */
    }
}
$a = new A(); /* Linha D */
array_push( $a-> getX(), "one");
array_push( $a-> getX(), "two");
echo count( $a-> getX());

//A: Não será necessário substituir linha alguma. O código como está já mostra o valor 2
//B: Linha A, para: protected &$ x = array();
//C: Linha B, para: public function &getX() {
//D: Linha C, para: return &$ this-> x;
//E: Linha D, para: $ a =& new A();






































// Reposta: C