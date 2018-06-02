<?php

  require_once('../lib/pdf/mpdf.php');

  include("../conexion.php");
  $RFC= $_REQUEST['RFC'];
  $nombre = $_POST['nombre'];
  $apellido_p = $_POST['apellido_p'];
  $apellido_m = $_POST['apellido_m'];
  $insti_proce = $_POST['insti_proce'];
  $conferencia = $_POST['conferencia'];
  $taller_1 = $_POST['taller_1'];
  $taller_2 = $_POST['taller_2'];
  $taller_3 = $_POST['taller_3'];
  $conferencia = $_POST['conferencia'];
  // $query = "SELECT RFC, nombre, apellido_p,apellido_m,insti_proce FROM lista_oficial WHERE RFC = '$RFC'";
  ini_set('date.timezone', 'America/Mexico_City');
  $fecha = date('d-m-Y', time());
  // $prepare = $conexion->prepare($query);
  // $prepare->execute();
  // $resulSet = $prepare->get_result();
  // while($datos[] = $resulSet->fetch_array());
  // $resulSet->close();
  // $prepare->close();
  // $conexion->close();


  $html = '<main>

    <h1>Gafete</h1>
    <p>RFC: '.$RFC.'</p>
    <p>Nombre: '.$nombre.' '.$apellido_p.' '.$apellido_m.'</p>
    <p>Procedencia: '.$insti_proce.'</p>

    <p>Conferencia: '.$conferencia.'</p>
  ';




  $mpdf = new mPDF('c', 'A7');
  $css = file_get_contents('css/style.css');
  $mpdf->writeHTML($css,1);
  $mpdf->writeHTML($html);
  $mpdf->Output('alumnos_registrados.pdf','I');

 ?>
