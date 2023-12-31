<?php

require('./fpdf.php');
require '../conexion_BD.php';
require_once "../EVENT_BITACORA.php";
$model = new EVENT_BITACORA;
session_start();
$model->reportvolpro();
$IDProyecto=$_SESSION['ID_Proyect'];

$sql1=$conexion->query("SELECT * FROM `tbl_proyectos` WHERE ID_proyecto='$IDProyecto'");

while($row=mysqli_fetch_array($sql1)){
    $Nombre_del_proyecto=$row['Nombre_del_proyecto'];
}

class PDF extends FPDF
{

   // Cabecera de página
   function Header()
   {
      include '../conexion_BD.php';//llamamos a la conexion BD

      $consulta_info = $conexion->query(" select Valor from tbl_ms_parametros WHERE ID_Parametro = 12");//traemos datos de la empresa desde BD
      $dato_info = $consulta_info->fetch_object();
      $this->Image('asociacion.jpg', 250, 5, 40); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 19); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(95); // Movernos a la derecha
      $this->SetTextColor(0, 0, 0); //color
      //creamos una celda o fila
      $this->Cell(110, 15, utf8_decode($dato_info -> Valor), 0, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
      $this->Ln(3); // Salto de línea
      $this->SetTextColor(103); //color


      $consulta_info = $conexion->query(" select Valor from tbl_ms_parametros WHERE ID_Parametro = 14");//traemos datos de la empresa desde BD
      $dato_info = $consulta_info->fetch_object();
      /* UBICACION */
      $this->Cell(1);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(96, 10, utf8_decode("Ubicación : " . $dato_info -> Valor), 0, 0, '', 0);
      $this->Ln(5);


      $consulta_info = $conexion->query(" select Valor from tbl_ms_parametros WHERE ID_Parametro = 13");//traemos datos de la empresa desde BD
      $dato_info = $consulta_info->fetch_object();
      /* TELEFONO */
      $this->Cell(1);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(59, 10, utf8_decode("Teléfono : " . $dato_info -> Valor), 0, 0, '', 0);
      $this->Ln(5);


      $consulta_info = $conexion->query(" select Valor from tbl_ms_parametros WHERE ID_Parametro = 15");//traemos datos de la empresa desde BD
      $dato_info = $consulta_info->fetch_object();
      /* CORREO */
      $this->Cell(1);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode("Correo : " . $dato_info -> Valor), 0, 0, '', 0);
      $this->Ln(5); //SERIA EL ESPACIADO ENTRE ESTE CAMPO Y EL TITULO DEL REPORTE

       // Obtener la fecha actual
       $fecha_actual = date('d/m/Y h:m:s');
      //  $fecha_actual = date('Y-m-d H:i:s');
      //  $fecha_actual = date('Y-m-d H:i:s');
      $fecha_actual = date('d/m/Y H:i:s');
      

       // Escribir la fecha en el reporte
       $this->Cell(1);  // mover a la derecha
       $this->Cell(85,10,'Fecha: '.$fecha_actual,0,0,'', 0);
       $this->Ln(7); //SERIA EL ESPACIADO ENTRE ESTE CAMPO Y EL TITULO DEL REPORTE


      /* SUCURSAL */
      // $this->Cell(180);  // mover a la derecha
      // $this->SetFont('Arial', 'B', 10);
      // $this->Cell(85, 10, utf8_decode("Sucursal : "), 0, 0, '', 0);
      // $this->Ln(10);

      /* TITULO DE LA TABLA */
      //color
      $this->SetTextColor(0, 95, 189);
      $this->Cell(100); // mover a la derecha
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(100, 10, utf8_decode("REPORTE DE VINCULACIÓN VOLUNTARIOS Y PROYECTOS"), 0, 1, 'C', 0);
      $this->Ln(7);

      /* CAMPOS DE LA TABLA */
      //color
      $this->SetFillColor(255, 255, 255); //colorFondo
      $this->SetTextColor(000, 000, 000); //colorTexto
      $this->SetDrawColor(255, 255, 255); //colorBorde 163 163 163
      $this->SetFont('Arial', 'B', 11);
      $this->Cell(50, 10, utf8_decode('N°'), 1, 0, 'C', 1);
      $this->Cell(70, 10, utf8_decode('NOMBRE DEL VOLUNTARIO'), 1, 0, 'C', 1);
      $this->Cell(70, 10, utf8_decode('NÚMERO DE TELÉFONO'), 1, 0, 'C', 1);
      $this->Cell(70, 10, utf8_decode('DIRECCIÓN'), 1, 1, 'C', 1);
    //   $this->Cell(50, 10, utf8_decode('DEPARTAMENTO'), 1, 0, 'C', 1);
    //   $this->Cell(50, 10, utf8_decode('MUNICIPIO'), 1, 1, 'C', 1);
      // $this->Cell(50, 10, utf8_decode('CAI'), 1, 0, 'C', 1);
      // $this->Cell(20, 10, utf8_decode('Estado'), 1, 1, 'C', 1);
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y h:m:s');
      $this->Cell(540, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}

include '../conexion_BD.php';
//require '../../funciones/CortarCadena.php';
/* CONSULTA INFORMACION DEL HOSPEDAJE */
//$consulta_info = $conexion->query(" select *from hotel ");
//$dato_info = $consulta_info->fetch_object();

$pdf = new PDF();
$pdf->AddPage("landscape"); /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */
$pdf->AliasNbPages(); //muestra la pagina / y total de paginas

$i = 0;
$pdf->SetFont('Arial', '', 12);
$pdf->SetDrawColor(163, 163, 163); //colorBorde

$campo = $_GET["campo"];
$fechaInicio = $_SESSION['fechaInicio'];
$fechaFinal = $_SESSION['$fechaFinal'];

$consulta_reporte_alquiler = $conexion->query("SELECT SQL_CALC_FOUND_ROWS vp.ID_Vinculacion_Proy, v.Nombre_Voluntario, p.Nombre_del_proyecto, a.nombre_Area_Trabajo, vp.Fecha_Vinculacion_P FROM tbl_voluntarios_proyectos vp 
LEFT JOIN tbl_voluntarios v ON vp.ID_Voluntario = v.ID_Voluntario
LEFT JOIN tbl_proyectos p ON vp.ID_proyecto = p.ID_proyecto
LEFT JOIN tbl_area_trabajo a ON vp.ID_Area_Trabajo = a.ID_Area_Trabajo
WHERE (vp.ID_Vinculacion_Proy LIKE '%{$campo}%' OR v.Nombre_Voluntario LIKE '%{$campo}%' OR a.nombre_Area_Trabajo LIKE '%{$campo}%' OR vp.Fecha_Vinculacion_P LIKE '%{$campo}%') 
AND p.Nombre_del_proyecto = '$Nombre_del_proyecto' AND vp.Fecha_Vinculacion_P BETWEEN '{$fechaInicio}' AND '{$fechaFinal}'");

while ($datos_reporte = $consulta_reporte_alquiler->fetch_object()) {   
      $i = $i + 1;
      /* TABLA */
      $pdf->Cell(50, 10, utf8_decode($i), 0, 0, 'C', 0);
      $pdf->Cell(70, 10, utf8_decode($datos_reporte -> Nombre_Voluntario), 0, 0, 'C', 0);
      $pdf->Cell(70, 10, utf8_decode($datos_reporte -> Nombre_del_proyecto), 0, 0, 'C', 0);
      $pdf->Cell(70, 10, utf8_decode($datos_reporte -> nombre_Area_Trabajo), 0, 1, 'C', 0);
    //   $pdf->Cell(50, 10, utf8_decode($datos_reporte -> departamento), 0, 0, 'C', 0);
    //   $pdf->Cell(50, 10, utf8_decode($datos_reporte -> municipio), 0, 1, 'C', 0);
      // $pdf->Cell(100, 10, utf8_decode($datos_reporte -> cai), 1, 0, 'C', 0);   
      // $pdf->Cell(20, 10, utf8_decode($datos_reporte -> estado), 0, 1, 'C', 0);   
   }

$pdf->Output('ReporteDecSAR.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)
