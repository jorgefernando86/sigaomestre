<?php


if(isset($_POST['email']) && !empty($_POST['email'])){
$nome = addcslashes $_POST['nome']
$email = addcslashes $_POST['email']
$message =  addcslashes $_POST['message']




$to = "jorge_fernando_coelho@hotmail.com";
$subject = "Contato teste";

$body = "NOME: ".$nome. "\r\n"
        "E-Mail: ".$email. "\r\n"
        "Mensagem: ".$message. "\r\n";


$header = "from: jorge_fernando_coelho@hotmail.com"."\r\n"
            ."Replay-to:".$email."\r\n"
            ."x=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("E-mail enviado com sucesso!!");
}

else{
    echo("E-mail não foi enviado");
}

}

?>