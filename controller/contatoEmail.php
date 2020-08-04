<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

$nome = $_POST['nome'];
$titulo = $_POST['titulo'];
$mensagem = $_POST['msg'];

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.sendgrid.net';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'apikey';                               
    $mail->Password   = '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';   
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    $mail->Port       = 587;                                    


    $mail->setFrom("lucas2001brito77@gmail.com", $nome);
    $mail->addAddress('lucas2001brito77@gmail.com', 'Administrador');     

    
    $mail->isHTML(true);                                 
    $mail->CharSet = "utf-8";
    $mail->Subject = $titulo;
    $mail->Body    = $mensagem;

    $mail->send();
    echo 'Mensagem Enviada com Sucesso';
} catch (Exception $e) {
    echo "Erro ao Enviar a Mensagem. Tente Novamente!!!";
}