<?php
date_default_timezone_set('America/Sao_Paulo')

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$nome = isset($_POST['nome']) ? $_POST['nome'] : 'Não informado';
$email = isset($_POST['email']) ? $_POST['email'] : 'email Não informado';
$Mensagem = isset($_POST['Mensagem']) ? $_POST['Mensagem'] : 'Mensagem Não informado';
$Assunto = isset($_POST['Assunto']) ? $_POST['Assunto'] : 'Assunto Não informado';
$data = date('d/m/Y H:i:s');
if($email && $Mensagem ) {
$mail = new PHPMailer();
	
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'jorgefernando101186@gmail.com';
	$mail->Password = 'coelho_shrek';
	$mail->Port = 587;

	$mail->setFrom('jorgefernando101186@gmail.com');
	$mail->addAddress('jorgefernando101186@gmail.com');

	$mail->isHTML(true);
	$mail->Subject = $Assunto;
	$mail->Body = "Nome:{$nome}<br>
                  E-mail:{$email}<br>
                  Mensagem:{$Mensagem}<br>
                  Data/Hora: {$data}";
	

	if($mail->send()) {
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email nao enviado';
       
	}

}else{
    echo 'Email não enviado!'
}
