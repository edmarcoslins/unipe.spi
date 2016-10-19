<?php

$arquivo = "at01.txt";

function criaArquivo($arq){
	if(!file_exists($arq)){
		echo "-Arquivo não existe. Será criado!<br>";
	}
	echo "-Escrita no arquivo<br>";
	$pulalinha ="\r\n";
	$f = fopen($arq,"w");
	fwrite($f, "Frase teste1".$pulalinha);
	fwrite($f, "Frase teste2".$pulalinha);
	fwrite($f, "Frase teste3".$pulalinha);
	fclose($f);
}

function leArquivo($arq){
	if(file_exists($arq)){
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

criaArquivo($arquivo);
echo "-Fim da escrita no arquivo<br>-Leitura arquivo.<br><br>";
leArquivo($arquivo);
echo "-Fim leitura arquivo.<br>";

?>