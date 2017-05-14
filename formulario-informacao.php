<?php

//recuperar dados do formulario
$GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);

$Erro     = true;
$Nome     = $GetPost['nome'];
$Email    = $GetPost['email'];
$Fone    = $GetPost['fone'];
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
$Mailer->Subject = "Maiores Informações";
$Mailer->Body = "{$Mensagem}<br><br>Nome: {$Nome}<br>E-mail: {$Email}<br>Telefone: {$Fone}";

$enviado = $Mailer->Send();

if ($enviado){
	header("Location: dadosenviados.html");
}   else {
	echo "Não foi possivel enviar o e-mail!";
}













?>