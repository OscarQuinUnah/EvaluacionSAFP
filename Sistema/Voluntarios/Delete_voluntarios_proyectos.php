<?php
include("../../conexion_BD.php");
    $ID_Vinculacion_Proy = $_GET['ID_Vinculacion_Proy'];
    try {

        //DELETE FROM tbl_ms_usuario WHERE Usuario = $id
    $sql = "DELETE FROM tbl_voluntarios_proyectos where ID_Vinculacion_Proy = '$ID_Vinculacion_Proy'";
    $resultado = mysqli_query($conexion,$sql);

    //Para saber el usuario activo
 
    session_start();     
    $Usuario = $_SESSION['usuario'];     
    include("../../conexion_BD.php");
    $sql1 = $conexion->query("SELECT * FROM `tbl_ms_usuario` WHERE Usuario='$Usuario'");

    while($row = mysqli_fetch_array($sql1)){
        $ID_Usuario = $row['ID_Usuario'];
    }

    // Fin saber usuario activo

    if($resultado){

          // Consulta para obtener el último ID de la tabla
          $sql2 = $conexion->query("SELECT MAX(IdVinculacion_Log) AS ultimo_id FROM tbl_voluntarios_proyectos_log");

          while ($row = mysqli_fetch_array($sql2)) {
              $ultimo_id = $row['ultimo_id'];
          }//Fin consulta ultimo ID de la tabla
  
  
          //actualizacion a tabla log con usuario que hizo la accion
  
          $sql3="UPDATE tbl_voluntarios_proyectos_log SET Log_Usuario='$Usuario' where IdVinculacion_Log = $ultimo_id";
          $resultado3 = mysqli_query($conexion,$sql3);
          //Fin actualizacion a tabla log 

        echo "<script languaje='JavaScript'>
                alert('Los datos se eliminaron correctamente de la Base de Datos');
                location.assign('voluntarios_proyectos_Adm.php');
                </script>";    
                require_once "../../EVENT_BITACORA.php";
                            $model = new EVENT_BITACORA;
                            session_start();
                            $_SESSION['IDvolproBitacora']=$ID_Vinculacion_Proy;
                            $model->DELVOLPRO();  
 
 
    }else{
        if (mysqli_errno($conexion)) {
            echo "<script languaje='JavaScript'>
        alert('No puedes borrar este usuario');
        location.assign('voluntarios_proyectos_Adm.php');
        </script>";   
        } else {
            echo "<script languaje='JavaScript'>
        alert('Los datos NO se eliminaron de la BD');
        location.assign('voluntarios_proyectos_Adm.php');
        </script>"; 
        }
          
    }
    $conexion->close();


        } catch (Exception $e) {
            //$mensajeError = $e->getMessage();

            $errorCode = $e->getCode(); // Almacenar el código de error SQL\
            $sql2 = "SELECT mensaje FROM tbl_errores WHERE codigo = $errorCode";
            $resultado=mysqli_query($conexion,$sql2);

            $row = mysqli_fetch_assoc($resultado);
            $mensaje = $row['mensaje'];
            //echo $mensaje;

             echo "<script languaje='JavaScript'>
             alert('$mensaje');
             location.assign('voluntarios_proyectos_Adm.php');
            </script>";

             //printf("Ha ocurrido un error: %s\n", mysqli_error($conexion));

            $errorMessage = $e->getMessage(); // Almacenar el mensaje de error SQL


            //echo $errorMessage;
            //echo $errorCode;
             exit;
        }
    
?>