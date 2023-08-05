<?php
include("../../conexion_BD.php");
    $ID_Rol = $_GET['ID_Rol'];
if ($ID_Rol === '1') {
    echo "<script language='JavaScript'>
    alert('No puedes borrar el rol Administrador');
    location.assign('RolesAdm.php');
    </script>";
    return; // Sale del código sin seguir ejecutando el resto del script
}
$sql = "SELECT COUNT(*) as total FROM tbl_ms_usuario WHERE ID_Rol = $ID_Rol";
$result = $conexion->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    $totalUsuariosConRol = $row['total'];

    if ($totalUsuariosConRol > 0) {
        // El rol se encuentra en uso, mostrar la alerta
        echo "<script language='JavaScript'>
                alert('El Rol se encuentra en uso');
                location.assign('RolesAdm.php');
                </script>";
        return;
    }
}

    // $sql1=$conexion->query("SELECT * FROM `tbl_ms_usuario` WHERE Usuario='$Nombre_Usuario'");

    //              while($row=mysqli_fetch_array($sql1)){
    //                 $IDusuarioDel=$row['ID_Usuario'];
    //              }


    try {

        //DELETE FROM tbl_ms_usuario WHERE Usuario = $id
    $sql = "DELETE FROM tbl_ms_roles WHERE ID_Rol = '$ID_Rol'";
    $resultado = mysqli_query($conexion,$sql);



    if($resultado){
        echo "<script languaje='JavaScript'>
                alert('Los datos se eliminaron correctamente de la Base de Datos');
                location.assign('RolesAdm.php');
                </script>";  
                require_once "../../EVENT_BITACORA.php";
                $model = new EVENT_BITACORA;
                session_start();
                $_SESSION['IDRolDELETE']=$ID_Rol;
                $model->DeleteRol();   

                            
    }else{
        if (mysqli_errno($conexion)) {
            echo "<script languaje='JavaScript'>
        alert('No puedes borrar este usuario');
        location.assign('RolesAdm.php');
        </script>";   
        } else {
            echo "<script languaje='JavaScript'>
        alert('Los datos NO se eliminaron de la BD');
        location.assign('RolesAdm.php');
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
              alert('$mensaje Por referencia con la tabla roles');
              location.assign('RolesAdm.php');
             </script>";

             //printf("Ha ocurrido un error: %s\n", mysqli_error($conexion));

            $errorMessage = $e->getMessage(); // Almacenar el mensaje de error SQL
            //echo $errorMessage;

            //echo $errorMessage;
            //echo $errorCode;
             exit;
        }
    
?>