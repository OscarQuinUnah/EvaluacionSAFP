<?php
if (!empty($_POST["btn_enviar_M_P"])) {
   include("../conexion_BD.php");
$User=$_SESSION['user'];
$idUser=$_SESSION['ID_User'];



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
               echo'<script>alert("Preguntas Registradas Exitosamente ")</script>';
               header( "refresh:0;url=../Pantallas/Login.php" ); 

            }
   
    
 } else {
    header("location:../Pantallas/Preguntas_RAI.php");
 }
 
 // Cerrar la conexión a la base de datos
 mysqli_close($conexion);
}
?>
