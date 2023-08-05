<?php
include("../../conexion_BD.php");
    $ID_proyecto = $_GET['ID_proyecto'];

    $sql1=$conexion->query("SELECT * FROM `tbl_proyectos` WHERE ID_proyecto='$ID_proyecto'");

                 while($row=mysqli_fetch_array($sql1)){
                    $Nombre_Proyect=$row['ID_proyecto'];
                 }


    try {

        //DELETE FROM tbl_ms_usuario WHERE Usuario = $id
    $sql = "DELETE FROM tbl_proyectos WHERE ID_proyecto = '$ID_proyecto'";
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
            $sql2 = $conexion->query("SELECT MAX(IdProyectos_Log) AS ultimo_id FROM tbl_proyectos_log");

            while ($row = mysqli_fetch_array($sql2)) {
                $ultimo_id = $row['ultimo_id'];
            }//Fin consulta ultimo ID de la tabla


            //actualizacion a tabla log con usuario que hizo la accion

            $sql3="UPDATE tbl_proyectos_log SET Log_Usuario='$Usuario' where IdProyectos_Log = $ultimo_id";
            $resultado3 = mysqli_query($conexion,$sql3);
        //Fin actualizacion a tabla log 
        
        echo "<script languaje='JavaScript'>
                alert('Los datos se eliminaron correctamente de la Base de Datos');
                location.assign('proyectosAdm.php');
                </script>";     
                require_once "../../EVENT_BITACORA.php";
                $model = new EVENT_BITACORA;
                session_start();
                $_SESSION['IDprojectBitacora']=$ID_proyecto;
                $model->DELProj();  

                            
    }else{
        if (mysqli_errno($conexion)) {
            echo "<script languaje='JavaScript'>
        alert('No puedes borrar este usuario');
        location.assign('proyectosAdm.php');
        </script>";   
        } else {
            echo "<script languaje='JavaScript'>
        alert('Los datos NO se eliminaron de la BD');
        location.assign('proyectosAdm.php');
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
                  alert('Excepción capturada: $mensaje Con la tabla bitacora');
                  location.assign('proyectosAdm.php');
              </script>";

            //   echo "<script languaje='JavaScript'>
            //   alert('$mensaje') Por referencia a llave foranea con la tabla bitacora;
            //   location.assign('usuariosAdm.php');
            //  </script>";

             //printf("Ha ocurrido un error: %s\n", mysqli_error($conexion));

            $errorMessage = $e->getMessage(); // Almacenar el mensaje de error SQL


            echo $errorMessage;
            //echo $errorCode;
             exit;
        
    }

    
?>