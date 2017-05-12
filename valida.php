<?php
	session_start();

	if((isset($_POST['login'])) && (isset($_POST['senha']))) {
	

		if(($_POST['senha'] == "chaveanos123") && ($_POST['login'] == "chavecolombo")) {
			header("Location: controle-celulas.html");
		}else{
			$_SESSION['loginErro'] = "Usuário ou senha inválidos";
			header("Location: login.php");
		}
}
	//}else
	//	$_SESSION['loginErro'] = "Usuário ou senha inválidos";
	//	header("Location: login.html");


?>