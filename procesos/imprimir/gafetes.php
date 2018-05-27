<?php

  require_once('../lib/pdf/mpdf.php');

  include("../conexion.php");
  $RFC= $_REQUEST['RFC'];
  $query = "SELECT RFC, nombre, apellido_p,apellido_m,insti_proce FROM lista_oficial WHERE RFC = '$RFC'";
  ini_set('date.timezone', 'America/Mexico_City');
  $fecha = date('d-m-Y', time());
  $prepare = $conexion->prepare($query);
  $prepare->execute();
  $resulSet = $prepare->get_result();
  while($datos[] = $resulSet->fetch_array());
  $resulSet->close();
  $prepare->close();
  $conexion->close();


  $html = '<main>

    <h1  class="clearfix">Gafete</h1>
  ';

  foreach ($datos as $datos) {
    $html .= '
            <p>RFC: '.$datos['RFC'].'</p>
            <p>Nombre: '.$datos['nombre'].'</p>
            <p>Apellidos: '.$datos['apellido_p'].' '.$datos['apellido_m'].'</p>
            <p>Institución: '.$datos['insti_proce'].'</p>
              ';

  }


  $mpdf = new mPDF('c', 'A7');
  $css = file_get_contents('css/style.css');
  $mpdf->writeHTML($css,1);
  $mpdf->writeHTML($html);
  $mpdf->Output('alumnos_registrados.pdf','I');

 ?>
