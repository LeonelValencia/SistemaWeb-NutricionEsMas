<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

require_once('config.php');
 $email = $_POST['usuario'];

 $query = "SELECT * FROM usuarios where username = '$email'";
 $result = $conexion->query($query);
 $row = $result->fetch_assoc();

 if($result->num_rows > 0){
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'nutricionesmas@outlook.com';                     //SMTP username
        $mail->Password   = 'm321.p3pc0';                               //SMTP password
        $mail->Port       = 587;                                    
    
        //Recipients
        $mail->setFrom('nutricionesmas@outlook.com', 'Nutricion es Mas');
        $mail->addAddress('albertomonta16@gmail.com', 'Correo de prueba');     //Add a recipient
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Recuperacion de contraseña';
        $mail->Body    = 'Hola, este es un correo generado para solicitar tu recuperacion de contraseña, por favor visita la pagina 
        <a href="localhost/nutricionesmas/change_password.php?username='.$row['username'].'">Recuperacion de contraseña</a>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        header("Location: ../index.html?message=OK");
    } catch (Exception $e) {
        header("Location: ../index.html?message=error");
    }
    
 }else{
    header("Location: ../index.html?message=not_found");
 }
?>