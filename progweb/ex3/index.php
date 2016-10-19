<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf8"/>
	<title>Atividade 3</title>
</head>
<body>
	<h1>Banco do Brasil</h1>
	<h2>Nossos investimentos especiais!</h2>
	<form action="#" method="post">
		<input type="radio" name="investimento" value="1" checked> Poupança
		<input type="radio" name="investimento" value="2"> Fundos de renda fixa<br>
		<input type="number" name="valor" placeholder="Digite o valor do investimento!" required/><br>
		<input type="submit" value="Enviar"/>
	</form>
  
<?php
	if($_POST){
		echo "<br><h2>Parabéns, você fex um ótimo investimento!</h2><br>";
		$valor = number_format($_POST['valor'],2,",",".");
		if($_POST['investimento'] == 1){
			$rendimento = number_format(($_POST['valor']*0.03),2,",",".");
			echo "Você terá um rendimento mensal de 3% sobre R$$valor, onde será: R$$rendimento de rendimento mensal.";
		}else if($_POST['investimento'] == 2){
			$rendimento = number_format(($_POST['valor']*0.04),2,",",".");
			echo "Você terá um rendimento mensal de 4% sobre R$$valor, onde será: R$$rendimento de rendimento mensal.";
		}
		echo "";
	}
?>

</body>
</html>