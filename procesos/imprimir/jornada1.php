<?php

  require_once('../lib/pdf/mpdf.php');

  include("../conexion.php");

  $query = "SELECT * FROM jornada1_alumnos";
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

    <h1  class="clearfix">Alumno Preregistrado Jornada 1<small><br /> Fecha: '.$fecha.'</small></h1>
    <p></p>
   <table>
      <thead>
        <tr>
          <th class="service">RFC</th>
          <th class="desc">Nombre</th>
          <th>Apellido Paterno</th>
          <th>Apellido Materno</th>
          <th>Taller 1</th>
          <th>Taller 2</th>
          <th>Taller 3</th>
          <th>Conferencia</th>
          <th>Institución</th>
          <th>E-mail</th>
          <th>Hora Registro</th>
          <th>Fecha Registro</th>

        </tr>
      </thead>
      <tbody>';
      foreach ($datos as $datos) {
        $html .= '<tr>
                  <td class="service">'.$datos['RFC'].'</td>
                  <td class="desc">'.$datos['nombre'].'</td>
                  <td class="unit">'.$datos['apellido_p'].'</td>
                  <td class="qty">'.$datos['apellido_m'].'</td>
                  <td class="total">'.$datos['taller_1'].'</td>
                  <td>'.$datos['taller_2'].'</td>
                  <td>'.$datos['taller_3'].'</td>
                  <td>'.$datos['conferencia'].'</td>
                  <td>'.$datos['insti_proce'].'</td>
                  <td>'.$datos['mail'].'</td>
                  <td>'.$datos['hora_registro'].'</td>
                  <td>'.$datos['fecha_registro'].'</td>

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
