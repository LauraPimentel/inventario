<?php

  require_once('../lib/pdf/mpdf.php');

  include("../conexion.php");
  $RFC= $_REQUEST['RFC'];
  $query = "SELECT * FROM lista_oficial";
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

    <h1  class="clearfix">Alumno Preregistrado <small><br /> Fecha: '.$fecha.'</small></h1>
    <p>Este alumno se encuenta preregistrado en el sistema debe pagar tres días despúes de haber realizado su registro, de lo contrario el sistema lo eliminará.</p>
    <h2>Jornada 1</h2>
   <table>
      <thead>
        <tr>
          <th class="service">RFC</th>
          <th class="desc">Nombre</th>
          <th>Apellido Paterno</th>
          <th>Apellido Materno</th>
          <th>Taller 1</th>

          <th>Conferencia</th>
          <th>Institución</th>
          <th>E-mail</th>
          <th>Hora Registro</th>
          <th>Fecha Registro</th>
          <th>Estado</th>
        </tr>
      </thead>

      <tbody>';
      foreach ($datos as $datos) {
        $html .= '
        <tr>
                  <td class="service">'.$datos['RFC'].'</td>
                  <td class="desc">'.$datos['nombre'].'</td>
                  <td class="unit">'.$datos['apellido_p'].'</td>
                  <td class="qty">'.$datos['apellido_m'].'</td>
                  <td class="total">'.$datos['taller_1'].'</td>

                  <td>'.$datos['conferencia'].'</td>
                  <td>'.$datos['insti_proce'].'</td>
                  <td>'.$datos['mail'].'</td>
                  <td>'.$datos['hora_registro'].'</td>
                  <td>'.$datos['fecha_registro'].'</td>
                  <td>'.$datos['estado'].'</td>
                </tr>';

      }

$html .= '
</tbody>
</table>

  </main>
  <footer>
    La lista esta sujeta a cambios.
  </footer>';


  $mpdf = new mPDF('c', 'A4');
  $css = file_get_contents('css/style.css');
  $mpdf->writeHTML($css,1);
  $mpdf->writeHTML($html);
  $mpdf->Output('alumnos_registrados.pdf','I');

 ?>
