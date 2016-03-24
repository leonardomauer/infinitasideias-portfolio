<?php
 
$email_servidor = "contato@infinitasideias.com.br";
$para = "contato@infinitasideias.com.br";
$email = $_POST['email'];
$mensagem = $_POST['message'];
$nome = $_POST['nome'];
$assunto = "Contato do Site - ".$nome;

function enviaEmail($email, $assunto, $mensagem, $para, $email_servidor) {
    $headers = "From: $email_servidor\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
  mail($para, $assunto, nl2br($mensagem), $headers);
}
 header("Location: ".$_SERVER['HTTP_REFERER']."");
?>