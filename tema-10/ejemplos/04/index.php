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

    //
    

    //Credenciales SMPT gmail
    $mail->Username = "antelle99@gmail.com";
    $mail->Password = '';


} catch (\Throwable $th) {

    //throw $th;
}