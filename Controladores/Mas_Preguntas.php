<?php
require '../conexion_BD.php';
       
  
  session_start();
    $User=$_SESSION['user'];
    $idUser=$_SESSION['ID_User'];
    $Contra=$_SESSION['R_contra'];

//Extra la cantidad de preguntas actuales
$sql1=$conexion->query("SELECT Preguntas_Contestadas FROM `tbl_ms_usuario` WHERE Usuario='$User'");
                
                 while($row=mysqli_fetch_array($sql1)){
                      $preguntas_C=$row['Preguntas_Contestadas'];
                 }

   
                 
                $pregunta=$_POST["Pregunta"];
                $respuesta=$_POST["respuesta"];
                $R_Fecha_actual = date("Y-m-j");
                

            //Encriptar respuestas
            // $respuesta=$_POST["respuesta"]; // Contraseña ingresada por el usuario en el formulario de registro
            $hashedAnswer = password_hash($respuesta, PASSWORD_DEFAULT);
            // Guardar $hashedAnswer en la base de datos junto con otros datos del usuario


                //Insert de Nueva Pregunta
                $sql=$conexion->query("INSERT INTO tbl_ms_preguntas_x_usuario(`ID_Pregunta`, `ID_Usuario`, `Respuesta`, `Creado_Por`, `Fecha_Creacion`) 
                    VALUES ('$pregunta','$idUser','$hashedAnswer', '$User', '$R_Fecha_actual')");
                    $preguntas_C=$preguntas_C+1;
                $sql2=$conexion->query("UPDATE tbl_ms_usuario SET Preguntas_Contestadas='$preguntas_C' WHERE Usuario='$User'");
                
                if ($sql) {
                          
                          include("../Controladores/Controlador_Revision_P.php");
                } else {
            ini_set('error_reporting', E_ALL);
           
        }

?>
