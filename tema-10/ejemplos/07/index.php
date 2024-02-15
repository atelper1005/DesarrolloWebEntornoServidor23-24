<?php
//Cargar clase PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Creo objeto clase PHPMailer
$mail = new PHPMailer(true);

//En caso de error lanza Exception
try {

    //Configuración juego caracteres
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = "quoted-printable";

    //Credenciales SMPT gmail
    $mail->Username = "antelle99@gmail.com";
    $mail->Password = 'amgk rnxy ivcv gtuk';

  // Configuración SMPT gmail
  $mail->SMTPDebug = 2;                                       //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication                             //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // tls Enable implicit TLS encryption
  $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Cabecera del emial
  $destinatario = 'antelle99@gmail.com';
  $remitente    = 'antelle99@gmail.com';
  $asunto       = "Email con PHPMailer";
  $mensaje      = file_get_contents('email.html');

  $mail->setFrom($remitente, 'Antonio J');
  $mail->addAddress($destinatario, 'Tellez');
  $mail->addReplyTo($remitente, 'Aj Tellez');
  // $mail->addCC('cc@example.com');
  // $mail->addBCC('bcc@example.com');

  //Attachments
   $mail->addEmbeddedImage('images/pikachu_sm.jpg', $cid);    

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = $asunto;
  $mail->Body    = $mensaje;
  
  // Enviamos el mensaje
  $mail->send();

  echo 'Message has been sent';

} catch (Exception $e) {

  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}