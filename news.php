<?php

//recuperar dados do formulario
$GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);

//Variáveis locais
$Erro     = true;
//$Nome     = $GetPost['nome'];
$Email    = $GetPost['email'];
//$Mensagem = $GetPost['mensagem'];

//Incluir a classe PHPMailer
include_once 'PHPMailer/class.smtp.php';
include_once 'PHPMailer/class.phpmailer.php';

//Enviando o e-mail utilizando a classe PHPMailer
$Mailer = new PHPMailer;
$Mailer->CharSet = "utf-8";
//$Mailer->SMTPDebug = 3;
$Mailer->IsSMTP();
$Mailer->Host = 'a2plcpnl0501.prod.iad2.secureserver.net';
$Mailer->SMTPAuth = true;
$Mailer->Username = "contato@chavededavicolombo.com.br";
$Mailer->Password = "keycolombo";
$Mailer->SMTPSecure = "ssl";
$Mailer->Port = 465;
$Mailer->FronName = "";
$Mailer->Fron = "contato@chavededavicolombo.com.br";
$Mailer->AddAddress("contato@chavededavicolombo.com.br");
$Mailer->IsHTML(true);
$Mailer->Subject = "Cadastro de e-mail para notícias";
$Mailer->Body = "E-mail: {$Email}";

//Verificação
$enviado = $Mailer->Send();

//Exibe uma mensagem de resultado
if ($enviado){
	header("Location: dadosenviados.html");
}   else {
	echo "Não foi possivel enviar o e-mail!";
}













?>