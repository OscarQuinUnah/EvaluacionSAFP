<?php
include("../conexion_BD.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

//Envio de correos


function sendMailLocal($R_Nombre, $R_usuario, $R_contra, $R_Correo)
{
    include("../conexion_BD.php");
    $sql2=$conexion->query("SELECT * FROM `tbl_ms_parametros` WHERE `ID_Parametro` in(3,4,6)");
 // Verificar si la consulta devolvió resultados
 if (mysqli_num_rows($sql2) >= 1) {
    // Recorrer los resultados y mostrarlos en pantalla
    while($row = mysqli_fetch_array($sql2)) {
        if ($row['ID_Parametro'] == 3) {
            $P_Correo=$row['Valor'];

        }
        if ($row['ID_Parametro'] == 4) {
            $P_Puerto=$row['Valor'];
        }

        if ($row['ID_Parametro'] == 6) {
            $P_Pass=$row['Valor'];
        }       
        if ($row['ID_Parametro'] == 12) {
            $P_Empresa=$row['Valor'];
        }  
    }
}
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->CharSet = 'UTF-8';                   //Para que las tildes se vean bien en el correo
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'outlook.office365.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   =  $P_Correo;                     //SMTP username
        $mail->Password   =   $P_Pass;                               //SMTP password
        $mail->SMTPSecure = 'tls';             //Enable implicit TLS encryption
        $mail->Port       = $P_Puerto;   
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
            );                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($P_Correo, 'Administrador Usuario (Asociacion Creo en ti)');
        $mail->addAddress($R_Correo);     //Add a recipient


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Asociacion Creo en Ti: Bienvenido(a) a nuestro sistema';
        $mail->Body    = '<!DOCTYPE html>
        <html lang="en">
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                <meta name="viewport" content="width=device-width, initial-scale=1"/>
                <title></title>
                <style type="text/css">
                    h1{
                        color: #000000;
                    }
                    p{
                        font-size: 14px;
                    }
                    img{
                        width: 10rem;
                        height: 10rem;
                    }
                    h2{
                        color: #057a05;
                    }
                </style>
            </head>
            <body>
            <h1> HOLA '.$R_Nombre.'</h1>

            <h2>¡Bienvenido(a) al Sistema SAFP de la '.$P_Empresa.'! </h2>
            <p>Estamos encantados de darte la bienvenida como nuevo usuario a nuestra plataforma. </p>

            <p>Tu participación es fundamental para nuestro éxito colectivo, y estamos emocionados de tener la oportunidad de colaborar contigo. 
            Siempre estamos aquí para ayudarte en cada paso del camino. Si tienes alguna pregunta, inquietud o sugerencia, no dudes en ponerte en contacto con nuestro equipo de soporte, quienes estarán encantados de asistirte.</p>

            <p>Una vez más, ¡bienvenido(a)! Estamos ansiosos porque formes parte de nuestra '.$P_Empresa.' a través del Sistema SAFP. 
            Juntos, estamos construyendo un futuro mejor.</p>

            <b><p>(Tus credenciales son: )</b></p></b> 

            <p>Usuario: '.$R_usuario.'</p>
            <p>Contraseña: '.$R_contra.'</p>
            
            <b><p>Saludos Coordiales, '.$P_Empresa.'.</b></p>
        
            </body>';

        $mail->send();
        echo '<script>alert("Correo de Bienvenida Enviado"); window.location.href="../Pantallas/Preguntas_RAI.php";</script>'; /*como esto es autoregistro el usuario debe configurar las preguntas secretas */
        // echo 'Mensaje enviado';
    } catch (Exception $e) {
        echo "Error en el envío del mensaje: {$mail->ErrorInfo}";
    }
}

//Enviar desde el servidor
function sendEmail($R_Nombre, $R_usuario, $R_contra, $R_Correo)
{
    include("../conexion_BD.php");
    $sql2=$conexion->query("SELECT * FROM `tbl_ms_parametros` WHERE `ID_Parametro` in(3,4,6,12)");
 // Verificar si la consulta devolvió resultados
 if (mysqli_num_rows($sql2) >= 1) {
    // Recorrer los resultados y mostrarlos en pantalla
    while($row = mysqli_fetch_array($sql2)) {
        if ($row['ID_Parametro'] == 3) {
            $P_Correo=$row['Valor'];

        }
        if ($row['ID_Parametro'] == 4) {
            $P_Puerto=$row['Valor'];
        }

        if ($row['ID_Parametro'] == 6) {
            $P_Pass=$row['Valor'];
        }     
        if ($row['ID_Parametro'] == 12) {
            $P_Empresa=$row['Valor'];
        }    
    }
}


        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->CharSet = 'UTF-8';                   //Para que las tildes se vean bien en el correo
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'outlook.office365.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   =  $P_Correo;                     //SMTP username
            $mail->Password   =   $P_Pass;                               //SMTP password
            $mail->SMTPSecure = 'tls';             //Enable implicit TLS encryption
            $mail->Port       = $P_Puerto;   
            $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
            );                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom($P_Correo, 'Administrador Usuario (Asociacion Creo en ti)');
            $mail->addAddress($R_Correo);
            $mail->CharSet = 'UTF-8';
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Asociacion Creo en Ti: Bienvenido(a) a nuestro sistema';
            $mail->Body    = '<!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                    <meta name="viewport" content="width=device-width, initial-scale=1"/>
                    <title></title>
                    <style type="text/css">
                        h1{
                            color: #000000;
                        }
                        p{
                            font-size: 14px;
                        }
                        img{
                            width: 10rem;
                            height: 10rem;
                        }
                        h2{
                            color: #057a05;
                        }
                    </style>
                </head>
                <body>
                <h1> HOLA '.$R_Nombre.'</h1>
    
                <h2>¡Bienvenido(a) al Sistema SAFP de la '.$P_Empresa.'! </h2>
                <p>Estamos encantados de darte la bienvenida como nuevo usuario a nuestra plataforma. </p>
    
                <p>Tu participación es fundamental para nuestro éxito colectivo, y estamos emocionados de tener la oportunidad de colaborar contigo. 
                Siempre estamos aquí para ayudarte en cada paso del camino. Si tienes alguna pregunta, inquietud o sugerencia, no dudes en ponerte en contacto con nuestro equipo de soporte, quienes estarán encantados de asistirte.</p>
    
                <p>Una vez más, ¡bienvenido(a)! Estamos ansiosos porque formes parte de nuestra '.$P_Empresa.' a través del Sistema SAFP. 
                Juntos, estamos construyendo un futuro mejor.</p>
    
                <b><p>(Tus credenciales son: )</b></p></b> 
    
                <p>Usuario: '.$R_usuario.'</p>
                <p>Contraseña: '.$R_contra.'</p>
                
                <b><p>Saludos Coordiales, '.$P_Empresa.'.</b></p>
            
                </body>';

            $mail->send();
            return true;
            //echo'<script>alert("Correo de Bienvenida Enviado exitoxamente")</script>';
            //echo '<script>alert("Correo de Bienvenida Enviado"); window.location.href="../Pantallas/Preguntas_RAI.php";</script>'; /*como esto es autoregistro el usuario debe configurar las preguntas secretas */
            //header( "refresh:0;url=../Pantallas/Login.php" ); 
        } catch (Exception $e) {
            return false;
        }
    }




?>