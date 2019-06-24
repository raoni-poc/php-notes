<?php

function gen() {
    echo "Laci";
    yield "Ari Junior";
    echo "Paloma";
    yield "Ari Neto";
    echo "Ariane";
}
gen();
foreach (gen() as $item){}