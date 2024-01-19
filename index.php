<?php
require('api.php');
require('bresoLayout.php');

HTML_begin();
echo '<br><br><br><br><h2 id="h">Aguarde,estamos verificando seu acesso...<br>Isso pode demorar um pouco</h2><br><br><br><br>';
HTML_close();
?>

<script>

	<?php
$encontrou = false;
//0 a 10200
if (isset($_GET['tk'])) {
	if (validarToken($_GET['tk'])) {
		$ini = new INI('tokens.ini');
		for ($i = 0; $i < 10210; $i++) 
		{
			if ($ini->Sessao_Existe('token', $i)) 
			{
				if ($ini->Ler('token', $i) == $_GET['tk']) {
					$encontrou = true;
					$ini->Modificar('token',$i,'null');
					$ini->Deletar_Sessao('token',$i);
					//echo '<br><br><center>Index: ' . $i . ' bateu';


					$ini2 = new INI('keys.ini');
					$aaa = $ini2->Ler('token',$_GET['tk']);

					echo 'document.getElementById("h").innerHTML = "<font style=\'color:lime\'>Token foi validado com sucesso!<br>Sua senha temporária é: <font style=\'color:cyan\'>'.$aaa.'</font><br>Guarde-a com segurança!</font>";';
					break;
				}
			}
		}
		if (!$encontrou) {
			//echo '<br><br><center>Token ja utilizado';
			echo 'document.getElementById("h").innerHTML = "<font style=\'color:orange\'>Token ja utilizado</font>";';
		}
	} else {
		//echo '<br><br><center>Token invalido';
		echo 'document.getElementById("h").innerHTML = "<font style=\'color:red\'>Token invalido!</font>";';
	}

} else if (isset($_GET['id'])) {
	//echo '<br><br><center>404 Forbiden';
	echo '
	setTimeout(()=>{
		window.location.href="index.php?tk='.$_GET["id"].'";
		},4000);
		';
}
else {
	//echo '<br><br><center>Token invalido';
	echo 'document.getElementById("h").innerHTML = "<font style=\'color:red\'>Token invalido!</font>";';
}




?>
</script>
	




