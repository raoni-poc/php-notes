<?php
echo preg_replace(
array("∞", "º", "≠"),
array("infinito", "graus", "diferente"),
"A temperatura de 5º, de 0 a ∞ onde x é ≠ de y.");












































/*
 * Irá lançar um warning pela falta de delimitadores do padrão.
 *
 * Se alterássemos a linha array("∞", "º", "≠") por array("/∞/", "/º/", "/≠/")
 * funcionaria perfeitamente, trazendo o resultado A temperatura de 5 graus,
 * de 0 a infinito onde x é diferente de y..
 */