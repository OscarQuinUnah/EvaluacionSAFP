<?php

class Conexion{
    public function  conectar(){
        return $conexion= new PDO('mysql:host=localhost; dbname=u511180871_bd_asociacion' , 'root' , '');
    }
    
}
include("conexion_BD.php");

#salida usuario
if (isset($_POST['action']) && $_POST['action'] === 'salirusu') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirusu();
}

#salida Home
if (isset($_POST['action']) && $_POST['action'] === 'salirhome') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirhome();
}

#salida Backup
if (isset($_POST['action']) && $_POST['action'] === 'salirback') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirback();
}

#salida bita
if (isset($_POST['action']) && $_POST['action'] === 'salirbitacora') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirbitacora();
}

#salida parametros
if (isset($_POST['action']) && $_POST['action'] === 'salirparametros') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirparametros();
}

#salida preguntas
if (isset($_POST['action']) && $_POST['action'] === 'salirpreguntas') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirpreguntas();
}

#salida rol
if (isset($_POST['action']) && $_POST['action'] === 'salirrol') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirrol();
}
#salida obj
if (isset($_POST['action']) && $_POST['action'] === 'salirobj') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirobj();
}
#salida SAR
if (isset($_POST['action']) && $_POST['action'] === 'salirSAR') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirSAR();
}

#salida proy
if (isset($_POST['action']) && $_POST['action'] === 'salirproy') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirproy();
}
#salida ges proy
if (isset($_POST['action']) && $_POST['action'] === 'salirgesproy') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirgesproy();
}

#salida donantes
if (isset($_POST['action']) && $_POST['action'] === 'salirdonantes') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirdonantes();
}

#salida tipo fondo
if (isset($_POST['action']) && $_POST['action'] === 'salirtfondo') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirtfondo();
}
#salida fondo
if (isset($_POST['action']) && $_POST['action'] === 'salirfondo') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirfondo();
}
#salida Voluntario
if (isset($_POST['action']) && $_POST['action'] === 'salirvol') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirvol();
}
#salida area trabajo
if (isset($_POST['action']) && $_POST['action'] === 'salirarea') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirarea();
}

#salida Vinculación Voluntarios
if (isset($_POST['action']) && $_POST['action'] === 'salirvinvol') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirvinvol();
}
#salida Pago
if (isset($_POST['action']) && $_POST['action'] === 'salirpago') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirpago();
}
#salida Tipo Pago
if (isset($_POST['action']) && $_POST['action'] === 'salirtpago') {
    session_start();
    // Aquí puedes incluir la función salirusu() del archivo EVENT_BITACORA
    require_once 'EVENT_BITACORA.php';

    $bitacora = new EVENT_BITACORA();
    $bitacora->salirtpago();
}

class EVENT_BITACORA{ 
    //===================================================================================
    //===================================================================================

    public function login(){
        
        $model = new conexion();
        $conexion = $model->conectar();
        $sql = "SELECT * FROM tbl_ms_usuario where Usuario=:usuario AND Contraseña=:contra AND Estado_Usuario ='ACTIVO'";
        $consulta = $conexion->prepare($sql);
        $consulta->bindParam(':usuario',$this->usuario,PDO::PARAM_STR);
        $consulta->bindParam(':contra',$this->contra,PDO::PARAM_STR);
        $consulta->execute();
        $total = $consulta->rowCount();
        if($total ==0){
            ?>

            <?php
        }else{
            $fecha = date("Y-m-d h:i:s");
            $hora = date("H:i:s");
            
            $fila = $consulta->fetch();

            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha,ID_Usuario,ID_Objeto,Accion,Descripcion) VALUES(NULL,'$fecha', '".$fila['ID_Usuario']."',16,'Inicio de sesion','Entró al sistema')";
            #$sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha,ID_Usuario,ID_Objeto,Accion,Descripcion) VALUES(NULL,'$fecha', '".$fila['ID_Usuario']."','".$fila['ID_Objeto']."','Inicio de secion','Entro al sistema')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();

            session_start();
            $_SESSION['IDUsuario'] = $fila['ID_Usuario'];
            ?>

        <?php
        }
    }
    
    //===================================================================================
    //===================================================================================
    public function entrarbitacora(){
        
        $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Entró a la pantalla Bitácora" ;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '2', 'Entrar a Bitácora', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();                 
        ?>
    <?php
    }
    public function entrarhome(){
        
        $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Entró a la pantalla Home" ;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '16', 'Entrar a Home', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();                 
        ?>
    <?php
    }
    public function Cerrarlogin(){
        
        $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Salió del sistema" ;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '16', 'Cerrar sesión', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();                 
        ?>
    <?php
    }
    
    public function entrarusuario(){
        $IDGlobal=$_SESSION['ID_User'];
            $model = new conexion();
            $conexion = $model->conectar();
            $Descripcion = "Entró a la pantalla Usuarios" ;
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal', '1', 'Entrar a Usuarios', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();                 
            ?>
        <?php
    }

    //===================================================================================
    //===================================================================================
    #registro usuario
    public function RegInsert(){
        session_start();
        $IDGlobal=$_SESSION['ID_User'];
        $_SESSION['IDUsuarioBitacora'];
            $model = new conexion();
            $conexion = $model->conectar();
            $Accion = "Creación de usuario";
            $IDU =  $_SESSION['IDUsuarioBitacora'];
            $Usuario = $_SESSION['UsuarioBitacora'];
            $Descripcion = "Nuevo usuario agregado: " .$Usuario;
            $fecha = date("Y-m-d h:i:s");

            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal', '1', 'Creación de usuario', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();        
            ?>
        <?php
    }  
    //===================================================================================
    //===================================================================================
    public function RegautoInsert(){
        //session_start();
        $IDGlobal= $_SESSION['IDUsuarioBitacora'];
            $model = new conexion();
            $conexion = $model->conectar();
            $Accion = "Creación de usuario";
            $IDU =  $_SESSION['IDUsuarioBitacora'];
            $Usuario = $_SESSION['UsuarioBitacora'];
            $Descripcion = "Se autoregistró el usuario: " .$Usuario;
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal', '1', 'Creación de usuario', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
    
            
          
            ?>
    
        <?php
    
        

    }


    //===================================================================================
    //===================================================================================
    #update usuario

    public function RegUptusu(){
        session_start();

        $IDGlobal=$_SESSION['ID_User'];


            $model = new conexion();
            $conexion = $model->conectar();
            $userName = $_SESSION['UsuarioBitUP'];
            $Descripcion = "Se modificó el usuario: ".$userName;
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', $IDGlobal , '1', 'Modificación de usuario', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
    
            
          
            ?>
    
        <?php
    
        

    }


    //===================================================================================
    //===================================================================================

    public function RegDelete(){
        session_start();
        $IDGlobal=$_SESSION['ID_User'];
            $model = new conexion();
            $conexion = $model->conectar();
            $IDDEL= $_SESSION['IDUsuarioBitacoraDELETE'];
            $Nombre_Usuario = $_SESSION['UsuarioBitacoraDELETE'];
            $Descripcion = "Se eliminó el usuario con ID: " .$Nombre_Usuario;
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', $IDGlobal, '1', 'Eliminación de usuario', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
          
            ?>
    
        <?php
    }

    //===================================================================================

    public function regNuevoUser(){
        $model = new conexion();
        $conexion = $model->conectar();
        $sql = "SELECT * FROM tbl_ms_usuario where Usuario=:R_usuario AND Contraseña=:R_contra AND Estado_Usuario ='ACTIVO'";
        $consulta = $conexion->prepare($sql);
        $consulta->bindParam(':R_usuario',$this->R_usuario,PDO::PARAM_STR);
        $consulta->bindParam(':R_contra',$this->R_contra,PDO::PARAM_STR);
        $consulta->execute();
        $total = $consulta->rowCount();
        if($total ==0){
            ?>


            <?php
        }else{
            $fecha = date("Y-m-d h:i:s");
            $hora = date("H:i:s");
            
            $fila = $consulta->fetch();

            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha,ID_Usuario,ID_Objeto,Accion,Descripcion) VALUES(NULL,'$fecha', '".$fila['ID_Usuario']."','".$fila['16']."','Creación de Usuario Nuevo','El usuario fue creado')";
            #$sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha,ID_Usuario,ID_Objeto,Accion,Descripcion) VALUES(NULL,'$fecha', '".$fila['ID_Usuario']."','".$fila['ID_Objeto']."','Inicio de secion','Entro al sistema')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();

            session_start();
            $_SESSION['IDUsuario'] = $fila['ID_Usuario'];
            ?>

        <?php
        }


    }
    //===================================================================================
    //===================================================================================


#entrar fondos
public function EntrarFondo(){
    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Entró a la pantalla de fondo" ;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '7', 'Entrar a fondo', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
}
##Insert fondos
public function RegaInsertFondo(){
    session_start();

    $IDGlobal=$_SESSION['ID_User'];

    $Nombre_del_Objeto=$_SESSION['nFondoBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Accion = "Creación de usuario";
        $Descripcion = "Se Ingresó el fondo: " .$Nombre_del_Objeto;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '7', 'Ingreso de fondo', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();

        
      
        ?>

    <?php

    

}

    //===================================================================================
    //===================================================================================
#Delete Fondos
public function DeleteFondo(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
   $Fondo=$_SESSION['IDFondoBitacoraDELETE'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se eliminó el fondo: " .$Fondo;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', $IDGlobal, '7', 'Eliminación de fondo', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
    

        
      
        ?>

    <?php

    

}

    //===================================================================================
    //===================================================================================
# Registro de Fondos
public function RegUptFondo(){
    session_start();
    $Nombre_del_Objeto= $_SESSION['IDFondoBitacoraUP'];
    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $_SESSION['IDUsuario'] = $fila['ID_Usuario'];
        $id =  $_SESSION['IDUsuarioBitacoraUP'];
        $user = $_SESSION['UsuarioBitacoraUP'];
        $Descripcion = "Se modificó el fondo: " .$Nombre_del_Objeto;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal ', '7', 'Modificación de fondo', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();

        
      
        ?>

    <?php

    

}

     //===================================================================================
    //===================================================================================
      #entrar voluntario
      public function entrarvol(){

        $IDGlobal=$_SESSION['ID_User'];

            $model = new conexion();
            $conexion = $model->conectar();
            $Descripcion = "Entró a la pantalla Voluntarios";
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal', '9', 'Entrar a voluntario', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();         
            ?> 
        <?php
    }
    #registro voluntario
    public function RegInsertvol(){
        session_start();
        $IDGlobal=$_SESSION['ID_User'];
     $voluntario=$_SESSION['nombreVolBitacora'];
            $model = new conexion();
            $conexion = $model->conectar();
            $Accion = "Creación de Voluntario";
            $Descripcion = "Nuevo Voluntario agregado: ".$voluntario;
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal', '9', 'Creación de voluntario', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
    
            
          
            ?>
    
        <?php
    
        

    }
 //===================================================================================
    //===================================================================================
    #delete voluntario
    public function DeleteVol(){
        session_start();
        $IDGlobal=$_SESSION['ID_User'];
       $idvol=$_SESSION['idVolBitacoraDELETE'];
       $voldelete= $_SESSION['NombreVolBitacoraDELETE'];
            $model = new conexion();
            $conexion = $model->conectar();
            $Descripcion = "Se eliminó el Voluntario: ".$idvol;
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', $IDGlobal, '9', 'Eliminación de voluntario', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
        
            ?>
    
        <?php
    
        
    
    }
    #update voluntario
    public function RegUptVol(){
        session_start();

        $IDGlobal=$_SESSION['ID_User'];
       $Voluntarioup= $_SESSION['VOLBitacoraUP'];
            $model = new conexion();
            $conexion = $model->conectar();
            $Descripcion = "Se modificó el voluntario: " .$Voluntarioup;
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal ', '9', 'Modificación de voluntario', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
    
            
          
            ?>
    
        <?php
    
        
    
    }
     //===================================================================================
    //===================================================================================
    #entrar pago
    public function entrarPago(){
        $IDGlobal=$_SESSION['ID_User'];
            $model = new conexion();
            $conexion = $model->conectar();
            $Descripcion = "Entró a la pantalla pago ";
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal', '10', 'Entrar a Pago', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();     
            ?>
        <?php
    }
#registro pago
    public function RegInsertPago(){
        session_start();
        $IDGlobal=$_SESSION['ID_User'];
       $idpago= $_SESSION['IDpagoBitacora'];
            $model = new conexion();
            $conexion = $model->conectar();
            $Accion = "Creación de Pago";
            $Descripcion = "Nuevo Pago agregado: ".$idpago;
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal', '10', 'Creación de Pago', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
    
            
          
            ?>
    
        <?php
    
        

    }

     //===================================================================================
    //===================================================================================
    

     //===================================================================================
    //===================================================================================
    #update pago
    public function RegUptpag(){
        session_start();
        $IDGlobal=$_SESSION['ID_User'];
        $ID_Pago=$_SESSION['idpagoBitacoraUP'];
        $Monto= $_SESSION['pagoBitacoraUP'];
            $model = new conexion();
            $conexion = $model->conectar();       
            $Descripcion = "Se modificó el pago a: " . $Monto ." con ID: ".$ID_Pago;
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal ', '10', 'Modificación de pago', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
    
            
          
            ?>
    
        <?php
    
        
    
    }
        //===================================================================================
#delete pago
    public function DeletePagos(){
        session_start();

        $IDGlobal=$_SESSION['ID_User'];
        $idpago= $_SESSION['idPagoBitdel'];
            $model = new conexion();
            $conexion = $model->conectar();
            $Descripcion = "Se eliminó el Pago con ID: ".$idpago;
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', $IDGlobal, '10', 'Eliminación de Pago', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
            ?>
    
        <?php
    }

      //===================================================================================
    //===================================================================================
    #registro donante
public function entrarDon(){
    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Entró a la pantalla donantes";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '8', 'Entrar a Donantes', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();   
        ?>
    <?php
  }
#registro donante
public function RegInsertDon(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
  $donante= $_SESSION['DonanteBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Nuevo Donante agregado: ".$donante;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '8', 'Creación de Donante', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();

        
      
        ?>

    <?php
  }
     //===================================================================================
#delete donante
public function DeleteDon(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
  $iddonante=  $_SESSION['IDdonanteBitacoraDELETE'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se eliminó el Donante con ID: ".$iddonante;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', $IDGlobal, '8', 'Eliminación de Donante', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
    

        
      
        ?>

    <?php
}
       //===================================================================================
    //===================================================================================
    #update donante
    public function RegUptdon(){
        session_start();

        $IDGlobal=$_SESSION['ID_User'];
        $Nombredonante=$_SESSION['donanteBitacoraUP'];
            $model = new conexion();
            $conexion = $model->conectar();      
            $Descripcion = "Se modificó el donante: " .$Nombredonante;
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal ', '8', 'Modificación de donante', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
    
            
          
            ?>
    
        <?php
    
        
    
    }

  //===================================================================================
  #entrar SAR   
public function entrarSar(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Entró a la pantalla SAR";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '11', 'Entrar a SAR', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();   
        ?>
    <?php
  }
#registro SAR   
public function RegInsertSar(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    
    $RTN= $_SESSION['RTNSarBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Registro SAR agregado con RTN: ".$RTN;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '11', 'Creación de registro SAR', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();   
        ?>
    <?php
  }

   //===================================================================================
    #update SAR 
    public function RegUptSar(){
        session_start();
        $IDGlobal=$_SESSION['ID_User'];
        $RTN=$_SESSION['$RTNsarBitUP'];
            $model = new conexion();
            $conexion = $model->conectar();      
            $Descripcion = "Se modificó el registro SAR con RTN: ".$RTN;
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal ', '11', 'Modificación de SAR', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
            ?>
        <?php    
    }
      //===================================================================================
#delete SAR 
public function DeleteSar(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $id_sar=$_SESSION['IDSarBitacoraDELETE'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se eliminó el registro SAR con ID: ".$id_sar;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', $IDGlobal, '11', 'Eliminación de SAR', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
      
        ?>

    <?php
}
  //===================================================================================
  #Entrar Rol
public function entrarRol(){
    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Entró a la pantalla roles";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '5', 'Entrar a Roles', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
#registro Rol
public function RegInsertRol(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $nombreRol= $_SESSION['RolBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Registro Rol agregado: ".$nombreRol;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '5', 'Creación de Rol', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
   //===================================================================================
    #update Rol
    public function RegUptRol(){
        session_start();
        $IDGlobal=$_SESSION['ID_User'];
        $nombreRol=$_SESSION['RolBitUP'];
            $model = new conexion();
            $conexion = $model->conectar();      
            $Descripcion = "Se modificó el Rol: " .$nombreRol;
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal ', '5', 'Modificación de Rol', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();  
            ?>
        <?php  
    }
   //===================================================================================
#delete Rol
public function DeleteRol(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $ID_Rol=$_SESSION['IDRolDELETE'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se eliminó el Rol: ".$ID_Rol;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', $IDGlobal, '5', 'Eliminación de Rol', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();   
        ?>
    <?php
}
 //===================================================================================
 #entrar preguntas
public function entrarpreg(){
    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Entró a la pantalla Preguntas ";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '4', 'Entrar a preguntas', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
#registro preguntas
public function RegInsertpreg(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $pregunta= $_SESSION['pregbit'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Pregunta agregada: ".$pregunta;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '4', 'Creación de pregunta', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
   //===================================================================================
    #update pregunta
    public function RegUptpreg(){
        session_start();
        $IDGlobal=$_SESSION['ID_User'];
        $pregunta=$_SESSION['pregbitUP'];
            $model = new conexion();
            $conexion = $model->conectar();      
            $Descripcion = "Se modificó La pregunta: " .$pregunta;
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal ', '4', 'Modificación de pregunta', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();  
            ?>
        <?php  
    }
          //===================================================================================
#delete preguntas
public function Deletepreg(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $ID_Pregunta=$_SESSION['IDpregDELETE'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se eliminó la pregunta: ".$ID_Pregunta;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', $IDGlobal, '4', 'Eliminación de pregunta', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
      
        ?>

    <?php
}
#entrar parametro
public function entrarpara(){
    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Entró a la pantalla Parámetros";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '3', 'Entrar a parametros', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
#registro parametro
public function RegInsertpara(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $Nombre_Parametro= $_SESSION['parabit'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Agregó el parámetro: ".$Nombre_Parametro;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '3', 'Creación de parámetro', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
   //=======
   //===================================================================================
    #update parametro
    public function RegUptpara(){
        session_start();
        $IDGlobal=$_SESSION['ID_User'];
        $Parametro=$_SESSION['paraBitUP'];
            $model = new conexion();
            $conexion = $model->conectar();      
            $Descripcion = "Se modificó el parámetro: " .$Parametro;
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal ', '3', 'Modificación de parámetro', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();  
            ?>
        <?php  
    }

        #entrar Tipo de Fondo
public function entrarTFondo(){
    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Entró a la pantalla Tipo Fondo";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '13', 'Entrar a Tipo Fondo', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
    #registro Tipo de Fondo
public function RegInsertTFondo(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];

    $nombre_T_Fondo= $_SESSION['nombreTFondoBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Agregó el Tipo de Fondo: ".$nombre_T_Fondo;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '13', 'Creación de Tipo Fondo', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

     #UPDATE Tipo de Fondo
public function UPInsertTFondo(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];

    $nombre_T_Fondo= $_SESSION['nombreTFondoBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se modificó el Tipo de Fondo: ".$nombre_T_Fondo;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '13', 'Modificación de Tipo Fondo', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

      #Delete Tipo de Fondo
public function DELInsertTFondo(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $ID_T_Fondo= $_SESSION['IDTFondoBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se eliminó el Tipo de Fondo con ID: ".$ID_T_Fondo;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '13', 'Eliminación de Tipo Fondo', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
 #entrar Area de trabajo
 public function entrarAreaT(){
    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Entró a la pantalla Área de Trabajo";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '14', 'Entrar a área de trabajo', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
  #Insert Area de trabajo
public function InsertAreaT(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $nombre_Area_Trabajo= $_SESSION['nareaBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Ingresó el área de trabajo: ".$nombre_Area_Trabajo;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '14', 'Agregar área de trabajo', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

   #UPDATE Area de trabajo
public function UPAreaT(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $nombre_Area_Trabajo= $_SESSION['nareaBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Modificó el área de trabajo: ".$nombre_Area_Trabajo;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '14', 'Modificación área de trabajo', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

    #DELETE Area de trabajo
public function DELAreaT(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $ID_Area_Trabajo= $_SESSION['IDareaBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se eliminó el área de trabajo con ID: ".$ID_Area_Trabajo;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '14', 'Eliminación área de trabajo', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

    #entrar Voluntario Projecto
public function entrarVOLPRO(){
    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Entró a la pantalla Vinculación de Voluntarios";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '15', 'Entrar a Vinculación de Voluntarios', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
     #Insert Voluntario Projecto
public function InsertVOLPRO(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $ID_Voluntario= $_SESSION['IDvolproBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se Vinculó el voluntario con ID: ".$ID_Voluntario;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '15', 'Vinculación de voluntario', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

      #UPDATE Voluntario Projecto
public function UPVOLPRO(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $ID_Vinculacion_Proy= $_SESSION['IDvolproBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se modificó el voluntario vinculado con ID: ".$ID_Vinculacion_Proy;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '15', ' Modidicación voluntario vinculado', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

  #DELETE Voluntario Projecto
public function DELVOLPRO(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $ID_Vinculacion_Proy= $_SESSION['IDvolproBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se eliminó el voluntario vinculado con ID: ".$ID_Vinculacion_Proy;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '15', 'Eliminación voluntario vinculado', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

    #Entrar gestor Projecto
public function entrarGProj(){
    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Entró a la pantalla Gestion de Proyectos";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '6', 'Entrar a Gestión de Proyecto', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
    #Entrar Projecto
public function entrarProj(){
    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Entró a la pantalla Proyectos";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '6', 'Entrar a proyecto', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
  #Insert Projecto
public function InsertProj(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $nomb_proyec= $_SESSION['projectBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se creó el proyecto: ".$nomb_proyec;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '6', 'Creación de proyecto', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

   #Insert Projecto
public function UPTProjec(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $nomb_proyec= $_SESSION['projectBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se modificó el proyecto: ".$nomb_proyec;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '6', 'Modificación de proyecto', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

     #Insert Projecto
public function DELProj(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $ID_proyecto= $_SESSION['IDprojectBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se eliminó el proyecto con ID: ".$ID_proyecto;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '6', 'Eliminación de proyecto', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

    #entrarTipo Pago
public function entrarTPago(){
    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Entró a la pantalla Tipo de Pago";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '17', 'Entrar a Tipo Pago', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
      #Insert Tipo Pago
public function InsertTPago(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $Nombre= $_SESSION['nombtpagoBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se agregó el tipo pago: ".$Nombre;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '17', 'Ingreso Tipo Pago', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

      #UPT Tipo Pago
public function UPTTPago(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $Nombre= $_SESSION['nombtpagoBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se modificó el tipo pago: ".$Nombre;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '17', 'Modificación Tipo Pago', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

     #Delete Tipo Pago
public function DELTPago(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $ID_T_pago= $_SESSION['IDtpagoBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se eliminó el tipo pago con ID: ".$ID_T_pago;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '17', 'Eliminación Tipo Pago', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

         #entrar OBJETO
public function entrarObj(){
    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Entró a la pantalla Objetos";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '18', 'Entrar a Objetos', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
       #Insert OBJETO
public function InsertObj(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $objeto= $_SESSION['OBJBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se agregó el objeto: ".$objeto;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '18', 'Ingreso de objeto', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

    #UP Objeto
public function UPObj(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $objeto= $_SESSION['OBJBitacora'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se modificó el objeto: ".$objeto;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '18', 'Modificación de objeto', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

  #DELETE Objeto
public function DELObj(){
    session_start();
    $IDGlobal=$_SESSION['ID_User'];
    $idObj= $_SESSION['IDobjDELETE'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se eliminó el objeto con ID: ".$idObj;
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '18', 'Eliminación de objeto', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

   #Reporte pago
public function reportpago(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se generó reporte de pago ";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '10', 'Reporte Pago', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
     #Reporte usuario
public function reportusu(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se generó reporte de usuario ";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '1', 'Reporte usuario', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

   #Reporte DONANTE
public function reportdonan(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se generó reporte de donantes ";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '8', 'Reporte donantes', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

    #Reporte DONANTE
public function reportfondo(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se generó reporte de fondos ";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '7', 'Reporte fondos', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

    #Reporte Objeto
public function reportobj(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se generó reporte de objetos ";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '18', 'Reporte objetos', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

  #Reporte parametro
public function reportparametro(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se generó reporte de parámetros ";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '3', 'Reporte parametros', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

   #Reporte preguntas
public function reportpregunt(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se generó reporte de preguntas ";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '4', 'Reporte preguntas', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

   #Reporte projecto
public function reportproj(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se generó reporte de proyecto ";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '6', 'Reporte proyecto', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

     #Reporte rol
public function reportrol(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se generó reporte de roles ";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '5', 'Reporte roles', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
#Reporte sar
public function reportsar(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se generó reporte de SAR ";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '11', 'Reporte SAR', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
#Reporte tipo fondo
public function reportTfondo(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se generó reporte de tipo de fondo ";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '13', 'Reporte tipo fondo', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

  #Reporte tipo pago
public function reportTpago(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se generó reporte de tipo de pago ";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '17', 'Reporte tipo pago', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
    #Reporte voluntario proyecto
public function reportvolpro(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se generó reporte de vountario proyecto ";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '15', 'Reporte voluntario proyecto', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

    #Reporte voluntarios
public function reportvol(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se generó reporte de vountarios ";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '9', 'Reporte voluntarios', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

   #Reporte bitacora
public function reportbit(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se generó reporte de bitacora";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '2', 'Reporte bitacora', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
#Reporte area trabajo
public function reportareaT(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Se generó reporte de area de trabajo";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '14', 'Reporte area de trabajo', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
  #entrar backup 
public function entrarbackup(){
    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Entró a la pantalla Backup";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '12', 'Entrar a Backup', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
  #backup 
public function backupcrea(){
    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Creó copia de seguridad";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '12', 'Creación copia de seguridad', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

    #backup actualizar
public function backupres(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Actualizó copia de seguridad";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '12', 'Actualizar copia de seguridad', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
  #backup delete
public function backuDEL(){

    $IDGlobal=$_SESSION['ID_User'];
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Eliminó copia de seguridad";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '12', 'Eliminación copia de seguridad', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
#Salida usuario
  public function salirusu(){

    $IDGlobal=$_SESSION['ID_User'];
    
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Salió de la pantalla Usuarios";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '1', 'Salida de pantalla Usuario', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

  #Salida home
  public function salirhome(){

    $IDGlobal=$_SESSION['ID_User'];
    
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Salió de la pantalla Home";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '16', 'Salida de pantalla Home', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }

 #Salida backup
 public function salirback(){

    $IDGlobal=$_SESSION['ID_User'];
    
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Salió de la pantalla Backup";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '12', 'Salida de pantalla Backup', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
   #Salida bitacora
  public function salirbitacora(){

    $IDGlobal=$_SESSION['ID_User'];
    
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Salió de la pantalla Bitácora";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '2', 'Salida de pantalla Bitácora', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
   #Salida parametros
   public function salirparametros(){

    $IDGlobal=$_SESSION['ID_User'];
    
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Salió de la pantalla Parámetros";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '3', 'Salida de pantalla Parámetros', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
  #Salida preguntas
  public function salirpreguntas(){

    $IDGlobal=$_SESSION['ID_User'];
    
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Salió de la pantalla Preguntas";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '4', 'Salida de pantalla Preguntas', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
  #Salida rol
  public function salirrol(){

    $IDGlobal=$_SESSION['ID_User'];
    
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Salió de la pantalla Roles";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '5', 'Salida de pantalla Roles', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
   #Salida objeto
   public function salirobj(){

    $IDGlobal=$_SESSION['ID_User'];
    
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Salió de la pantalla Objeto";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '18', 'Salida de pantalla Objeto', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
    #Salida SAR
    public function salirSAR(){

        $IDGlobal=$_SESSION['ID_User'];
        
            $model = new conexion();
            $conexion = $model->conectar();
            $Descripcion = "Salió de la pantalla SAR";
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal', '11', 'Salida de pantalla SAR', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
            ?>
        <?php
      }

   #Salida proj
   public function salirproy(){

    $IDGlobal=$_SESSION['ID_User'];
    
        $model = new conexion();
        $conexion = $model->conectar();
        $Descripcion = "Salió de la pantalla Proyecto";
        $fecha = date("Y-m-d h:i:s");
        $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
        VALUES (NULL,'$fecha', '$IDGlobal', '6', 'Salida de pantalla Proyecto', '$Descripcion')";
        $consulta2= $conexion->prepare($sql2);
        $consulta2->execute();
        ?>
    <?php
  }
     #Salida ges proj
     public function salirgesproy(){

        $IDGlobal=$_SESSION['ID_User'];
        
            $model = new conexion();
            $conexion = $model->conectar();
            $Descripcion = "Salió de la pantalla Gestión de Proyecto";
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal', '6', 'Salida de pantalla Gestión de Proyecto', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
            ?>
        <?php
      }
          #Salida donantes
     public function salirdonantes(){

        $IDGlobal=$_SESSION['ID_User'];
        
            $model = new conexion();
            $conexion = $model->conectar();
            $Descripcion = "Salió de la pantalla Donantes";
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal', '8', 'Salida de pantalla Donantes', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
            ?>
        <?php
      }

           #Salida tipo fondo
     public function salirtfondo(){

        $IDGlobal=$_SESSION['ID_User'];
        
            $model = new conexion();
            $conexion = $model->conectar();
            $Descripcion = "Salió de la pantalla Tipo de Fondo";
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal', '13', 'Salida de pantalla Tipo de Fondo', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
            ?>
        <?php
      }
             #Salida fondo
     public function salirfondo(){

        $IDGlobal=$_SESSION['ID_User'];
        
            $model = new conexion();
            $conexion = $model->conectar();
            $Descripcion = "Salió de la pantalla Fondo";
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal', '7', 'Salida de pantalla Fondo', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
            ?>
        <?php
      }

              #Salida voluntarios
     public function salirvol(){

        $IDGlobal=$_SESSION['ID_User'];
        
            $model = new conexion();
            $conexion = $model->conectar();
            $Descripcion = "Salió de la pantalla Voluntarios";
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal', '9', 'Salida de pantalla Voluntarios', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
            ?>
        <?php
      }

               #Salida area de trabajo
     public function salirarea(){

        $IDGlobal=$_SESSION['ID_User'];
        
            $model = new conexion();
            $conexion = $model->conectar();
            $Descripcion = "Salió de la pantalla Área de Trabajo";
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal', '14', 'Salida de pantalla Área de Trabajo', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
            ?>
        <?php
      }
#Salida vinculacion voluntarios
      public function salirvinvol(){

        $IDGlobal=$_SESSION['ID_User'];
        
            $model = new conexion();
            $conexion = $model->conectar();
            $Descripcion = "Salió de la pantalla Vinculación de Voluntarios";
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal', '15', 'Salida de pantalla Vinculación de Voluntarios', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
            ?>
        <?php
      }
      #Salida pago
      public function salirpago(){

        $IDGlobal=$_SESSION['ID_User'];
        
            $model = new conexion();
            $conexion = $model->conectar();
            $Descripcion = "Salió de la pantalla Pagos";
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal', '10', 'Salida de pantalla Pagos', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
            ?>
        <?php
      }
       #Salida tipo pago
       public function salirtpago(){

        $IDGlobal=$_SESSION['ID_User'];
        
            $model = new conexion();
            $conexion = $model->conectar();
            $Descripcion = "Salió de la pantalla Tipo de Pagos";
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal', '10', 'Salida de pantalla Tipo de Pagos', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
            ?>
        <?php
      }
      #Depurar bitacora
      public function depurarbit(){

        $IDGlobal=$_SESSION['ID_User'];
        
            $model = new conexion();
            $conexion = $model->conectar();
            $Descripcion = "Depuró la Bitácora";
            $fecha = date("Y-m-d h:i:s");
            $sql2 = "INSERT INTO tbl_ms_bitacora(ID_Bitacora,Fecha, ID_Usuario, ID_Objeto, Accion, Descripcion) 
            VALUES (NULL,'$fecha', '$IDGlobal', '2', 'Depuracion de Bitácora', '$Descripcion')";
            $consulta2= $conexion->prepare($sql2);
            $consulta2->execute();
            ?>
        <?php
      }
}  

?>
