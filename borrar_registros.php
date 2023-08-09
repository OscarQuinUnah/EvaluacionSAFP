<?php
if (isset($_POST["borrar"])) {
    // Conexión a la base de datos (reemplaza con tus propios datos de conexión)
    $conexion = new mysqli("localhost", "root", "", "bd_asociacion_creo_en_ti", "3306");
    $conexion->set_charset("utf8");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Consulta para borrar los 100 registros (ajusta según tu estructura de tabla)
    $sql = "DELETE FROM tbl_ms_bitacora LIMIT 100";

    if ($conexion->query($sql) === TRUE) {
        echo "Se borraron 100 registros correctamente.";
        require_once "EVENT_BITACORA.php";
                $model = new EVENT_BITACORA;
                session_start();
                $model->depurarbit();  
    } else {
        echo "Error al borrar registros: " . $conexion->error;
    }

    // Cierra la conexión a la base de datos
    $conexion->close();

    // Redirecciona a la pantalla anterior
    header("Location: Sistema/seguridad/bitacora.php");
    exit();
}
?>