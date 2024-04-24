<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>
<?php



if(validarToken('399342144'))
echo 'ok';
function gerarTokens() {
    echo '<script>';
    for ($i1 = 100; $i1 < 400; $i1++) {
        for ($i2 = 100; $i2 < 400; $i2++) {
            for ($i3 = 100; $i3 < 400; $i3++) {
                $resto = $i1.$i2.$i3;
                if ($resto % 1234 == 0) {
                    echo 'console.log("'.$resto.'") '.PHP_EOL;
                }
            }
        }
    }
    echo '</script>';
}

function validarToken($token) {
    $token= strval($token);
    $t1 = $token[0].$token[1].$token[2];
    $t2 = $token[3].$token[4].$token[5];
    $t3 = $token[6].$token[7].$token[8];
    $t4 = $t1.$t2.$t3;
    if ($t4 % 1234 == 0)
        return true;
    else
        return false;
}


?>
<script>

    

    function validarToken(token) {
        var t1 = parseInt(token[0] + '' + token[1] + '' + token[2])
        var t2 = parseInt(token[3] + '' + token[4] + '' + token[5])
        var t3 = parseInt(token[6] + '' + token[7] + '' + token[8])
        var t4 = parseInt(t1 + '' + t2 + '' + t3)
        if (parseInt(t4) % 1234 == 0)
            return true
        else
            return false
    }



</script>

</html>