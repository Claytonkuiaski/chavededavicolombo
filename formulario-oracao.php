<?php

$GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);

$Erro     = true;
$Nome     = $GetPost['nome'];
//$Email    = $GetPost['email'];
$Mensagem = $GetPost['mensagem'];

include_once 'PHPMailer/class.smtp.php';
include_once 'PHPMailer/class.phpmailer.php';

$Mailer = new PHPMailer;
$Mailer->CharSet = "utf-8";
$Mailer->IsSMTP();
$Mailer->Host = 'a2plcpnl0501.prod.iad2.secureserver.net';
$Mailer->SMTPAuth = true;
$Mailer->Username = "contato@chavededavicolombo.com.br";
$Mailer->Password = "**********";
$Mailer->SMTPSecure = "ssl";
$Mailer->Port = 465;
$Mailer->FronName = "{$Nome}";
$Mailer->Fron = "contato@chavededavicolombo.com.br";
$Mailer->AddAddress("contato@chavededavicolombo.com.br");
$Mailer->IsHTML(true);
$Mailer->Subject = "Oração via Site";
$Mailer->Body = "{$Mensagem},<br><br>Nome da pessoa: {$Nome}";

$enviado = $Mailer->Send();

if ($enviado){
	header("Location: dadosenviados.html");
}   else {
	echo "Não foi possivel enviar o e-mail!";
}













?>