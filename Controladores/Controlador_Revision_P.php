<?php
if (!empty($_POST["btn_enviar_M_P"])) {
   include("../conexion_BD.php");
$User=$_SESSION['user'];
$idUser=$_SESSION['ID_User'];
$Contra=$_SESSION['R_contra'];



$sql1=$conexion->query("SELECT valor FROM `tbl_ms_parametros` WHERE ID_Parametro=2");
                
                 while($row=mysqli_fetch_array($sql1)){
                    $parametro_preguntas=$row['valor'];
                 }

$sql=$conexion->query("SELECT Preguntas_Contestadas FROM `tbl_ms_usuario` WHERE ID_Usuario='$idUser' ");
                
                 while($row=mysqli_fetch_array($sql)){
                    $C_preguntas_respondidas=$row['Preguntas_Contestadas'];
                 }

if ($C_preguntas_respondidas >= $parametro_preguntas) {
   $sql=$conexion->query("SELECT * FROM tbl_ms_usuario where Estado_Usuario='NUEVO' and ID_Usuario='$idUser' ");
            if ($datos=$sql->fetch_object()) {
               header("location:../Pantallas/nueva_Contrasena.php");
            }else {
               echo'<script>alert(""Preguntas Registradas Exitosamente. Se ha enviado un correo.")</script>';
               //Traer los datos del usuario
               $query=$conexion->query("SELECT * FROM `tbl_ms_usuario` WHERE `ID_Usuario`='$idUser'");
               // Verificar si la consulta devolvió resultados
               if (mysqli_num_rows($query) >= 1) {
                  // Recorrer los resultados y mostrarlos en pantalla
                  while($row = mysqli_fetch_array($query)) {
                      if ($row['ID_Usuario'] == $idUser) {
                          $Nombre=$row['Nombre_Usuario'];
              
                      }
                      if ($row['ID_Usuario'] == $idUser) {
                          $Contraseña=$row['Contraseña'];
                      }
              
                      if ($row['ID_Usuario'] == $idUser) {
                          $Correo=$row['Correo_electronico'];
                      }       
                  }
              }
                             // Asegúrate de que las variables estén definidas antes de usarlas
                             $R_Nombre = $Nombre; // Reemplaza con el valor correcto
                             $R_usuario = $User; // Reemplaza con el valor correcto
                             $R_contra = $Contra; // Reemplaza con el valor correcto
                             $R_Correo = $Correo; // Reemplaza con el valor correcto
               require_once('../Controladores/Correo_Bienvenida.php'); // Asegúrate de proporcionar la ruta correcta
               sendEMail($R_Nombre, $R_usuario, $R_contra, $R_Correo);
               header( "refresh:0;url=../Pantallas/Login.php" ); 

            }
   
    
 } else {
    header("location:../Pantallas/Preguntas_RAI.php");
 }
 
 // Cerrar la conexión a la base de datos
 mysqli_close($conexion);
}
?>
