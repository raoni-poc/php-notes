<?php
echo preg_replace_callback("/.*/", "funcao", "CERTIFICAMP ARI JUNIOR");

function funcao($ocorrencias){
    return strtolower($ocorrencias[0]);
}