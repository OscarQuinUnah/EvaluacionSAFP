<!DOCTYPE html>
<html lang="en">
<head>
<title> Registro de Preguntas </title>
    <link rel="stylesheet" href="css/normalize.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&family=Staatliches&display=swap" rel="stylesheet">
    <!-- Preload -->
    <link rel="preload" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/normalize.css">

    <link rel="preload" href="../css/style.css">
    <link rel="stylesheet" href="../css/style.css">
    
    <link rel="stylesheet" media="screen and (min-device-width: 1025px) and (max-width: 1440px)" href="../css/desktop-style.css" />
    <!-- Para Celular -->
    <link rel='stylesheet' media='screen and (min-width: 100px) and (max-width: 767px)' href='../css/mobile-style.css' />
    <!-- Para Tablet -->
    <link rel='stylesheet' media='screen and (min-width: 768px) and (max-width: 1024px)' href='../css/medium-style.css' />
</head>
<body style="background: rgb(1,5,36);
            background: radial-gradient(circle, rgba(1,5,36,1) 0%, rgba(50,142,190,1) 100%);">

<section style="width: 400px; height: 400px; margin-bottom:40px; margin-top:70px;" class="primer_i">

<form class="content" action="../Controladores/Mas_Preguntas.php" method="post" enctype="multipart/form-data">
<?php 
    if(isset($_GET['error'])) { ?>
     <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <?php
     include ("../conexion_BD.php");
     //require ("preguntas.php");
?>

<?php
session_start();
$idUser=$_SESSION['ID_User'];
$Contra=$_SESSION['R_contra'];

//Consulta para traer la cantidad de preguntas secretas contestadas por el usuario
$sql1 = $conexion->query("SELECT Preguntas_Contestadas FROM `tbl_ms_usuario` WHERE ID_usuario = $idUser");

// Verificar si la consulta devolvió resultados
if (mysqli_num_rows($sql1) >= 1) {
    // Obtener el resultado como un array asociativo
    $row = mysqli_fetch_assoc($sql1);
    // Acceder al valor de la columna "Preguntas_Contestadas"
    $User_preguntas = $row['Preguntas_Contestadas'];
    $U_preguntas = $User_preguntas + 1;
}

//Trae la cantidad de preguntas de seguridad registradas por el usuario
$sql2=$conexion->query("SELECT * FROM `tbl_ms_parametros` WHERE `ID_Parametro` in(2)");
// Verificar si la consulta devolvió resultados
if (mysqli_num_rows($sql2) >= 1) {
    // Recorrer los resultados y mostrarlos en pantalla
    while($row = mysqli_fetch_array($sql2)) {
        if ($row['ID_Parametro'] == 2) {
            $C_preguntas=$row['Valor'];
        } 
  
    }
}

?>
<h3 style="margin-top:20px; margin-bottom:10px; text-align:center; color:#0F1328">Configuracion de pregunta secreta <?php echo $U_preguntas; ?> de <?php echo $C_preguntas; ?></h3>


<h3 style="margin-top:20px; margin-bottom:20px; text-align:center ">Seleccione una pregunta</h3>

<select class="controls" type="text" name="Pregunta" required>
    <option value="">Seleccione una pregunta</option>
    <?php
    $sql=$conexion->query("SELECT * FROM tbl_preguntas");
    while ($row = mysqli_fetch_array($sql)) {
        // Aquí debemos verificar si la pregunta ya está registrada para el usuario en cuestión.

        // Hacemos una consulta para verificar si la pregunta ya está registrada para el usuario.
        $preguntaRegistrada = false; // Suponemos inicialmente que no está registrada.
        // Aquí debes reemplazar 'preguntas_por_usuario' por el nombre de la tabla donde se registran las preguntas por usuario.
        $query = "SELECT COUNT(*) as count FROM tbl_ms_preguntas_x_usuario WHERE ID_Usuario = $idUser AND ID_Pregunta = " . $row['ID_Pregunta'];
        $result = mysqli_query($conexion, $query);
        if ($result) {
            $data = mysqli_fetch_assoc($result);
            if ($data['count'] > 0) {
                $preguntaRegistrada = true; // Si count > 0, la pregunta ya está registrada para el usuario.
            }
        }

        // Si la pregunta no está registrada para el usuario, mostramos la opción en el select.
        if (!$preguntaRegistrada) {
            ?>
            <option value="<?php echo $row['ID_Pregunta']; ?>"><?php echo $row['Pregunta']; ?></option>
            <?php
        }
    }
    ?>
</select>

<input onpaste="return false" oncopy="return false" onkeypress="return /[a-zA-Z0-9\-\_]/i.test(event.key)" oninput="this.value = this.value.toUpperCase();" class="controls" type="text" name="respuesta" placeholder="Ingrese la Respuesta "><br>

<input class="buttons" type="submit" Class="btn" name="btn_enviar_M_P" value="Enviar"> 
</form>
</section>
</html>