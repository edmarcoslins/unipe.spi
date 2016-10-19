<?php
	session_start();
	if(isset($_SESSION['logou'])){
		if($_SESSION['logou'] == 1){
			echo "Bem-vindo ao Sistema";
			session_destroy();
		}else{
			header("location:formulario.html");
		}
	}
?>