<?php
	require 'PHPMailer/PHPMailerAutoload.php';
	
	$email=$_POST['email'];
	$usuario=$_POST['usuario'];
	$senha=$_POST['senha']; 
// Instância do objeto PHPMailer
$mail = new PHPMailer;
 
// Configura para envio de e-mails usando SMTP
$mail->isSMTP();
 
// Servidor SMTP
$mail->Host = 'smtp.gmail.com';
 
// Usar autenticação SMTP
$mail->SMTPAuth = true;
 
// Usuário da conta
$mail->Username = 'grupoalgames@gmail.com';
 
// Senha da conta
$mail->Password = 'mypassword';
 
// Tipo de encriptação que será usado na conexão SMTP
$mail->SMTPSecure = 'ssl';
 
// Porta do servidor SMTP
$mail->Port = 465;
 
// Informa se vamos enviar mensagens usando HTML
$mail->IsHTML(true);
 
// Email do Remetente
$mail->From = 'grupoalgames@gmail.com';
 
// Nome do Remetente
$mail->FromName = 'AL Games';
 
// Endereço do e-mail do destinatário
$mail->addAddress($email);
 
// Assunto do e-mail
$mail->Subject = 'Seu cadastro foi efetuado com SUCESSO!';
 
// Mensagem que vai no corpo do e-mail
$mail->Body = '<font color="red"><h1>Cadastro em arthurlimadesouza.esy.es efetuado com SUCESSO!</h1></font><h3><b>Email: <b>'.$email.'</h3><h3><b>Usuario: </b>'.$usuario.'<h3><b>Senha: </b>'.$senha.'<h3>';
$mail->Body .= '<br> Obrigado por se cadastrar em nosso site.';
$mail->Body .= '<h5>Atenciosamente, Equipe AL Games<h5>
<h5>Não responda a este e-mail. Para ver mais informações, visite a Central de Ajuda das Contas AL Games.</h5>'; 
// Envia o e-mail e captura o sucesso ou erro
if($mail->Send()){
    echo 'E-mail de confirmação enviado!';
	}
else{
    echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
	}

?>
