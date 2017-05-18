<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Ministério de Louvor, adoração, ensino e missões. Igreja com a visão dos 5 ministérios. Area restrita a lideres">
  <meta name="robots" content="index, follow, archive" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-site-verification" content="HqPJbm88E-U8DvsIZ-omDXLvpH3NOQxVUNg_By33jN4" />
  <title>Comunidade Cristã Chave de Davi Colombo - Login</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/favi.ico">
	<link rel="stylesheet" href="css/geral.css">
	<link rel="stylesheet" href="css/plugins.css">
  <link rel="stylesheet" href="css/fonts.css">
  <script src="js/script.js"></script>
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
</head>
<body>
	<div class="area-login">
		<div class="container">
			<div class="login">
				<img src="images/chave.png" alt="logotipo">
				<h2>ÁREA RESTRITA</h2>
				<form action="valida.php" method="post">
					<input type="text" name="login" placeholder="login"><br><br>
					<input type="password" name="senha" placeholder="Senha"><br><br>
					<button type="submit">Acessar</button>
				</form>
				<p class="text-center text-danger">
					<?php if(isset($_SESSION['loginErro'])){
						echo $_SESSION['loginErro'];
						unset($_SESSION['loginErro']);
					}

					?>
				</p>
			</div>
		</div>
	</div>
</body>
</html>