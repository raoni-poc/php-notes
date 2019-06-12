<?php
/*
<form action="processa.php" method ="post">
<select name="objetivo" multiple ="multiple">
<option value="compras">Compras</option>
<option value="eventos">Eventos</option>
<option value="passeios">Passeios</option>
<option value="ecoturismo">Ecoturismo</option>
<option value="gastronomia">Gastronomia</option>
<option value="negocios">Neg&oacute;cios</option>
</select>
<input type="image" src="ok.png">
</form>

Ao selecionar os itens compras, passeios e gastronomia - que dados serão passados via POST
para o script processa.php?

A: Array
(
    [objetivo] => Array
        (
            [0] => compras
            [1] => passeios
            [2] => gastronomia
        )
)

B:
Array
(
        [objetivo] => Array
        (
            [0] => compras
            [1] =>  passeios
            [2] = > gastronomia
        )
    [x] => 15
    [y] => 18
)

C:
Array
(
    [objetivo] => gastronomia
    [x] => 15
    [y] => 18
)

D:
Array
(
    [objetivo] => Array
        (
            [0] => compras
            [1] = > passeios
            [2] = > gastronomia
        )
    [cadastrar_x] => 15
    [cadastrar_y] => 18
)
















