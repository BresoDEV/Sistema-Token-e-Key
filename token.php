<?php

function gerarListaTokens() {
    for ($i = 10; $i <= 40; $i++) {
        for ($i2 = 10; $i2 <= 40; $i2++) {
            $r = 100 - ($i + $i2);
            echo $i.$i2.$r.'<br>';
        }
    }
}
function gerarToken() {
    $lista = array();
    for ($i = 10; $i <= 40; $i++) {
        for ($i2 = 10; $i2 <= 40; $i2++) {
            $r = 100 - ($i + $i2);
            $lista[]= $i.$i2.$r;
        }
    }
    return $lista[rand(0,sizeof($lista))];
}


//453025
function validarToken($token) {
   
    $tk1 = $token[0].$token[1];
    $tk2 = $token[2].$token[3];
    $tk3 = $token[4].$token[5];
    if (($tk1 +$tk2+$tk3) == 100)
        echo 'Valido';
    else
        echo 'Invalido';
}

gerarListaTokens();
?>