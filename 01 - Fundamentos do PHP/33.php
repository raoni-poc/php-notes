<?php
function ExibeFilme($filme = "")
{
    if (8 == "8 Mile") {
        $resultado = "Verdadeiro";
    } else {
        $resultado = "Falso";
    }
    echo $filme;
}

echo ExibeFilme();
