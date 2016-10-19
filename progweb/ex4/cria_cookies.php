<?php
if($_GET){
	if(isset($_GET['nome']))
		setcookie("nome",$_GET['nome'],time()+36000);
	if(isset($_GET['cidade']))
		setcookie("cidade",$_GET['cidade'],time()+36000);
	header("location:mensagem.php");
	
}
?>