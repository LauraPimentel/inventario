<?php

  require_once('../lib/pdf/mpdf.php');

  include("../conexion.php");
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

    <h1  class="clearfix">Alumnos Inscritos <small><br /> '.$fecha.'</small></h1>
    <h3></h3>
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
    
                </tr>';

      }

      // include("../conexion.php");
      // $consulta = "(SELECT COUNT(*) as Inscritos FROM lista_oficial WHERE taller_1 = 'Bootstrap' OR taller_2 = 'Bootstrap' OR taller_3 = 'Bootstrap') UNION
      // (SELECT COUNT(*) as Inscritos FROM lista_oficial WHERE taller_1 = 'Angular' OR taller_2 = 'Angular' OR taller_3 = 'Angular') UNION
      // (SELECT COUNT(*) as Inscritos FROM lista_oficial WHERE taller_1 = 'Tienda En Drupal' OR taller_2 = 'Tienda En Drupal' OR taller_3 = 'Tienda En Drupal') UNION
      // (SELECT COUNT(*) as Inscritos FROM lista_oficial WHERE taller_1 = 'Programacion En Android' OR taller_2 = 'Programacion En Android' OR taller_3 = 'Programacion En Android')";
      // $prepare2 = $conexion->prepare($consulta);
      // $prepare2->execute();
      // $resulSet = $prepare2->get_result();
      // while($total[] = $resulSet->fetch_array());
      // $resulSet->close();
      // $prepare2->close();
      // $conexion->close();
      //
      // $sql = "SELECT taller FROM talleres";
      // $resultado = $conexion->query($sql);
      // $prepare3->execute();
      // $resulSet = $prepare3->get_result();
      // while($top[] = $resulSet->fetch_array());
      // $resulSet->close();
      // $prepare3->close();
      // $conexion->close();
      //
      // foreach ($total as $total) {
      //   $html .= '<tr>
      //             <td class="service">'.$top['taller'].','.$total['Inscritos'].'</td>
      //
      //           </tr>';
      //
      // }

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
