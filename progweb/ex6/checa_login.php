<?php
	if(isset($_POST)){
		$user = $_POST['user'];
		$senha = $_POST['senha'];
		session_start();
		if($user="aula" && $senha=="php"){
			$_SESSION['logou'] = 1;
		}else{
			$_SESSION['logou'] = 0;
		}
		header("location:principal.php");
	}
?>