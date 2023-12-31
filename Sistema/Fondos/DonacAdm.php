<?php 
//Controladores importantes
 require '../../conexion_BD.php'; 
 require_once "../../EVENT_BITACORA.php";
 $model = new EVENT_BITACORA;
 session_start();
 $model->entrarDon();      
 $usuario=$_SESSION['user'];
 $ID_Rol=$_SESSION['ID_Rol'];

 if (empty($_SESSION['user']) and empty($_SESSION['ID_User'])) {
  header('location:../../Pantallas/Login.php');
exit();
}

if(empty($_SESSION['ID_Proyect'])){
  header('location:../proyectos/proyectosAdm.php');
  exit();
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title>Donantes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script type="text/javascript">
    function confirmar(){
      return confirm('¿Está Seguro?, se eliminará el donante');
    }
  </script>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            window.addEventListener('beforeunload', function() {
                $.post('../../EVENT_BITACORA.php', { action: 'salirdonantes' });
            });
        });
    </script>
	<!--Seccion donde va toda la barra lateral -->
	<?php include '../sidebarpro.php'; ?>

	<!-- Pagina de contenido-->
	<section class="full-box dashboard-contentPage" style="overflow-y: auto;">
		<!-- Barra superior -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
			</ul>
		</nav>
		<!-- Muestra el contenido de la pagina -->
		<div class="container-fluid">
        <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title" style="text-align:center; margin-top:15px; margin-bottom:20px" >Mantenimiento Donantes</h1>
                          <?php $sql=$conexion->query("SELECT * FROM tbl_permisos where (Permiso_Insercion=1 and ID_Rol=$ID_Rol and ID_Objeto=8) or ('$usuario'='ADMIN')");
if ($datos=$sql->fetch_object()) { ?>
                          <button class="btn btn-success" id="btnagregar" name="btnAgregar" onclick="mostrarform(true)"><i class="zmdi zmdi-account-add"></i>Agregar Donante</button>
                          <!-- PARA GENERAR LOS REPORTES ====================== -->
                          <button class="btn btn-warning" id="generar-reporte" name="generar-reporte" onclick="window.open('../../fpdf/Reportedonaciones.php?campo=' + encodeURIComponent(document.getElementById('campo').value), '_blank')" >
                         <i class="zmdi zmdi-collection-pdf"></i> Generar Reporte de Donantes
                          </button>
                <!-- Fin Generar Reporte -->
                          <div class="box-tools pull-right">
                            <?php } ?>
                        </div>
                        <br>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <?php $sql=$conexion->query("SELECT * FROM tbl_permisos where (Permiso_consultar=1 and ID_Rol=$ID_Rol and ID_Objeto=8) or ('$usuario'='ADMIN')");
if ($datos=$sql->fetch_object()) { ?>
<div class="panel-body" id="listadoregistros">
<main>
        <div class="container py-4 text-center">

            <div class="row g-4">

                <div class="col-auto">
                    <label for="num_registros" class="col-form-label">Mostrar: </label>
                </div>

                <div class="col-auto">
                    <select name="num_registros" id="num_registros" class="form-select">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>

                <div class="col-auto">
                    <label for="num_registros" class="col-form-label">registros </label>
                </div>

                <div class="col-5"></div>

                <div class="col-auto">
                    <label for="campo" class="col-form-label">Buscar: </label>
                </div>
                <div class="col-auto">
                    <input type="text" name="campo" id="campo" class="form-control">
                </div>
            </div>
            <script>
document.getElementById("campo").addEventListener("keyup", function(event) {
  // Obtener el valor del input
  var campo = document.getElementById("campo").value;

  // Actualizar el valor del enlace
  var link = document.getElementById("generar-reporte");
  link.setAttribute("href", "../../fpdf/Reportedonaciones.php?campo=" + encodeURIComponent(campo));
});
  </script>
  
            <div class="row py-4">
                <div class="col">
                    <table class="table table-sm table-bordered table-striped">
                        <thead>
                            <th class="sort asc">ID</th>
                            <th class="sort asc">Donante</th>
                            <th class="sort asc">Teléfono o Celular</th>
                            <th class="sort asc">Dirección</th>
                            <th class="sort asc">Correo electrónico</th>

                            <?php $sql=$conexion->query("SELECT * FROM tbl_permisos where (Permiso_Actualizacion=1 and ID_Rol=$ID_Rol and ID_Objeto=8) or ('$usuario'='ADMIN')");
if ($datos=$sql->fetch_object()) { ?>
                            <th></th>
                            <?php } ?>
                            <?php $sql=$conexion->query("SELECT * FROM tbl_permisos where (Permiso_Eliminacion=1 and ID_Rol=$ID_Rol and ID_Objeto=8) or ('$usuario'='ADMIN')");
if ($datos=$sql->fetch_object()) { ?>
                            <th></th>
                            <?php } ?>
                        </thead>
                        <!-- El id del cuerpo de la tabla. -->
                        <tbody id="content">

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <label id="lbl-total"></label>
                </div>

                <div class="col-6" id="nav-paginacion"></div>

                <input type="hidden" id="pagina" value="1">
                <input type="hidden" id="orderCol" value="0">
                <input type="hidden" id="orderType" value="asc">
            </div>
        </div>
    </main>
</div>
    <script>
        /* Llamando a la función getData() */
        getData()

        /* Escuchar un evento keyup en el campo de entrada y luego llamar a la función getData. */
        document.getElementById("campo").addEventListener("keyup", function() {
            getData()
        }, false)
        document.getElementById("num_registros").addEventListener("change", function() {
            getData()
        }, false)


        /* Peticion AJAX */
        function getData() {
            let input = document.getElementById("campo").value
            let num_registros = document.getElementById("num_registros").value
            let content = document.getElementById("content")
            let pagina = document.getElementById("pagina").value
            let orderCol = document.getElementById("orderCol").value
            let orderType = document.getElementById("orderType").value

            if (pagina == null) {
                pagina = 1
            }
            let url = "Gestor_tbl_Donante.php"
            let formaData = new FormData()
            formaData.append('campo', input)
            formaData.append('registros', num_registros)
            formaData.append('pagina', pagina)
            formaData.append('orderCol', orderCol)
            formaData.append('orderType', orderType)

            fetch(url, {
                    method: "POST",
                    body: formaData
                }).then(response => response.json())
                .then(data => {
                    content.innerHTML = data.data
                    document.getElementById("lbl-total").innerHTML = 'Mostrando ' + data.totalFiltro +
                        ' de ' + data.totalRegistros + ' registros'
                    document.getElementById("nav-paginacion").innerHTML = data.paginacion
                }).catch(err => console.log(err))
        }

        function nextPage(pagina){
            document.getElementById('pagina').value = pagina
            getData()
        }

        let columns = document.getElementsByClassName("sort")
        let tamanio = columns.length
        for(let i = 0; i < tamanio; i++){
            columns[i].addEventListener("click", ordenar)
        }

        function ordenar(e){
            let elemento = e.target

            document.getElementById('orderCol').value = elemento.cellIndex

            if(elemento.classList.contains("asc")){
                document.getElementById("orderType").value = "asc"
                elemento.classList.remove("asc")
                elemento.classList.add("desc")
            } else {
                document.getElementById("orderType").value = "desc"
                elemento.classList.remove("desc")
                elemento.classList.add("asc")
            }

            getData()
        }

    </script>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


                    <?php } ?>
                    <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" action="Insert_Donan.php" method="POST">
                        <div class="container">
                          <div class="row">
                          <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <label>Nombre Donante(*):</label>
                            <input type="hidden" name="Nombre_Donante" id="Nombre_Donante">
                            <input onpaste="return false" type="text" class="form-control" name="Nombre_Donante" id="Nombre_Donante" maxlength="39" placeholder="INGRESE EL NOMBRE DEL DONANTE" onkeypress="return /[a-zA-Z\s]/i.test(event.key)"
oninput="this.value = this.value.toUpperCase(); validarEspacios(this);" required>
                          </div>
                          <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <label>Teléfono(*):</label>
                            <input type="hidden" name="Telef" id="Telef">
                            <input onpaste="return false" type="text" class="form-control" name="Telef" id="Telef" maxlength="19" placeholder="INGRESE EL NÚMERO DE TELÉFONO" onkeypress='return event.charCode >= 48 && event.charCode <= 57' oninput="validarTelefono(event)" required>
                          </div>
                          <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <label>Dirección(*):</label>
                            <input type="hidden" name="Direccion" id="Direccion">
                            <input onpaste="return false" type="text" class="form-control" name="Direccion" id="Direccion" maxlength="39" placeholder="INGRESE LA DIRECCIÓN DEL DONANTE" oninput="this.value = this.value.toUpperCase(); validarEspacios(this);" required>
                          </div>
                          <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <label>Correo electrónico(*):</label>
                            <input type="hidden" name="Correo_electronico" id="Correo_electronico">
                            <input onpaste="return false" type="email" class="form-control" name="Correo_electronico" id="Correo_electronico" maxlength="39" placeholder="INGRESE EL CORREO ELECTRÓNICO" oninput="validarCorreo(event)" onkeydown="return evitarEspacios(event)"  required>
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <button class="btn btn-primary" type="submit" name="enviar" value="AGREGAR"><i class="zmdi zmdi-upload"></i> Guardar</button>
                          <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="zmdi zmdi-close-circle"></i> Cancelar</button>
                          </div>
                          </div>
                          </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
		</div>
	</section>


	
	<!--script en java para los efectos-->
  <script src="../../js/Buscador.js"></script>
  <script src="../../js/events.js"></script>
 	<script src="../../js/jquery-3.1.1.min.js"></script>
	<script src="../../js/main.js"></script>
  <script src="../../js/usuario.js"></script>

  <script>
    //Validar Telefono
    function validarTelefono(event) {
    const telefono = event.target.value.trim();
    
    if (telefono.length < 8 || telefono[0] === '0') {
        event.target.setCustomValidity('El número de teléfono no debe comenzar en 0 y debe tener minimo 8 digitos.');
    } else {
        const numeros = telefono.replace(/[^0-9]/g, '');
        const repetidos = numeros.split('').sort().join('').match(/(.)\1{4}/g);
        
        if (repetidos) {
        event.target.setCustomValidity('El número de teléfono contiene más de 5 dígitos repetidos consecutivos.');
        } else {
        const unicos = new Set(numeros);
        const porcentaje = unicos.size / telefono.length;
        
        if (porcentaje < 0.5) {
            event.target.setCustomValidity('El número de teléfono no cumple los requisitos mínimos.');
        } else {
            event.target.setCustomValidity('');
        }
        }
    }
    }
  </script>

<script>
  //Evitar espacios
function evitarEspacios(event) {
  if (event.keyCode === 32) { // 32 es el código de tecla para el espacio en blanco
    event.preventDefault(); // Cancelar el evento de pulsación de tecla
    return false; // Impedir la entrada del espacio en blanco
  }
}
</script>

<script>
function validarEspacios(input) {
  input.value = input.value.replace(/^\s+|\s{2,}/g, ' ');
}
</script>

<script>
  //Confirmar cancelacion
  function cancelarform() {
  swal({
    title: 'Confirmar Cancelacion',
    text: "¿Estás seguro de que deseas cancelar? Todos los datos no guardados se perderán.",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#40C13C',
    cancelButtonColor: '#F44336',
    confirmButtonText: '<i class="zmdi zmdi-check"></i> Si, cancelar',
    cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Volver'
  }).then(function () {
    window.location.href = "DonacAdm.php";
  });
}
</script>
</body>
</html>
