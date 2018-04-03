<?php

date_default_timezone_set('Brazil/East');
/* * *****************************************
  DEFINIÇÃO DA BASE DE INFORMAÇÕES DO SISTEMA
 * ***************************************** */
$SITENAME = "Experience";
$SITEDESC = "Atividades extras para o curso Experience";
//define("SITETAGS", "Vitoria Trajes, Vitória Trajes, VitoriaTrajes, VitóriaTrajes, Aluguel de Roupas, Roupas de aluguel, Compra de roupas, Vestido de casamento, Roupa de casamento, Madrinhas, Debutantes, Eventos Finos, Aluguel de acessórios, ");
$SUPPORT = "suport@n2y.com.br";
$SUPORTNAME = "Equipe de Suporte ao Cliente";
$NOREPLY = "no-reply@n2y.com.br";
$NOREPLYNAME = "Não Responda";
$Version = "0.0.2a";
/* * *****************************************
  DEFINIÇÃO DO SERVIDOR DE EMAILS
 * ***************************************** */
define("MAILUSER", "hugo.allnet@gmail.com");
define("MAILPASS", "csdl13231010");
define("MAILPORT", "587");
define("MAILHOST", "smtp.gmail.com");

/* * ***************************
  ENVIA O EMAIL
 * *************************** */

function sendMail($assunto, $mensagem, $mensagemSemHTML, $remetente, $nomeRemetente, $destino, $nomeDestino, $reply = NULL, $replyNome = NULL) {

    require 'mail/PHPMailerAutoload.php';
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail = new PHPMailer;
    $mail->isSMTP();                                      // Habilita o envio via SMTP
    $mail->SMTPAuth = true;                               // Ativa autenticação
    $mail->isHTML(true);                                  // Configura o email como HTML


    $mail->Host = MAILHOST;                               // Nome do Servidor de Envio
    $mail->Port = MAILPORT;                               // Porta de Envio de Email
    $mail->Username = MAILUSER;                           // e-mail SMTP para autenticação
    $mail->Password = MAILPASS;                           // senha do email com SMTP definido
    $mail->SMTPSecure = 'tsl';                            // Ativar autenticação TSL, SSL também é aceita


    $mail->setFrom(utf8_decode($remetente), utf8_decode($nomeRemetente)); //Remetente
    $mail->addAddress(utf8_decode(MAILUSER), utf8_decode(SITENAME));     // Destinatário

    if ($reply != NULL) {
        $mail->addReplyTo($reply, $replyNome);               //Responder para
    }

    $mail->Subject = $assunto; //assunto
    $mail->Body = $mensagem; //mensagem
    $mail->AltBody = $mensagemSemHTML; //mensagem sem HTML

    if ($mail->send()) {
        return true;
    } else {
        return false;
    }
}
