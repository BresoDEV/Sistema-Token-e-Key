<?php
require('api.php');
require('bresoLayout.php');
$tokens = array('[token]');
$keys = array('[token]');
$contador = 0;
for ($x = 100; $x <= 200; $x++) {
    for ($y = 100; $y <= 200; $y++) {
        $m = $x * $y;
        $resto = 50000 - $m;
        array_push($tokens, $contador . '="' . $x . $y . $resto . '"');
        array_push($keys, $x . $y . $resto . '="' .bin2hex(random_bytes(25)) . '"');
        $contador++;
    }
}
$tokespronto = '';
$keyspronto = '';
foreach ($tokens as $t) {
    $tokespronto .= $t . PHP_EOL;
}
foreach ($keys as $t) {
    $keyspronto .= $t . PHP_EOL;
}
file_put_contents('tokens.ini', $tokespronto);
file_put_contents('keys.ini', $keyspronto);


HTML_begin();
echo 'Processo finalizado';

    ?>
    <style>
        button{
            background-color: aqua;
        }
    </style>
<form action="" method="get">
    <input type="text">
    <button type="submit">Enviar</button>
</form>
    <?php
    HTML_close();
    ?>