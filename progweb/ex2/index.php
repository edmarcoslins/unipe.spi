<?php

	$arquivo = "at02.txt";

	function criaArquivo($arq){
		//echo "-Escrita no arquivo<br>";
		$pulalinha ="\r\n";
		$f = fopen($arq,"w");
		fwrite($f, $_POST['nome1'].$pulalinha);
		fwrite($f, $_POST['nome2'].$pulalinha);
		fwrite($f, $_POST['nome3'].$pulalinha);
		fwrite($f, $_POST['nome4'].$pulalinha);
		fwrite($f, $_POST['nome5'].$pulalinha);
		fclose($f);
	}

	function leArquivo($arq){
		if(file_exists($arq)){
			echo "<h2>Lista de Nomes- gravados no arquivo $arq!</h2>";
			$f = fopen($arq,"r");
			while(!feof($f)){
				$linha = fgets($f);
				echo "$linha<br>";
				//break;
			}
			fclose($f);
		}else{
			echo "-Arquivo não existe.<br>";
		}
	}
	
?>

<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf8"/>
	<title>Atividade 2</title>
</head>
<body>
	<form action="#" method="post">
		<input type="text" name="nome1" placeholder="Digite nome1 aqui!" required/><br>
		<input type="text" name="nome2" placeholder="Digite nome2 aqui!" required/><br>
		<input type="text" name="nome3" placeholder="Digite nome3 aqui!" required/><br>
		<input type="text" name="nome4" placeholder="Digite nome4 aqui!" required/><br>
		<input type="text" name="nome5" placeholder="Digite nome5 aqui!" required/><br>
		<input type="submit" value="Enviar"/>
	</form>
	<br>
  
<?php
	if(isset($_POST['nome1'])){
		criaArquivo($arquivo);
		leArquivo($arquivo);
	}
?>

</body>
</html>