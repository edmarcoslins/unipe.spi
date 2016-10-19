<?php
	include('funcoes.php'); //require provoca erro fatal e o include não, se o arquivo não existir
	$resultado = soma(4,7);
	echo "Atividade include.<br>";
	echo "Resutado de 4+7=$resultado";
	echo "<br>require provoca erro fatal e o include não, se o arquivo não existir";
?>