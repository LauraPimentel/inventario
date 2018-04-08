<?php
require_once('../procesos/conexion.php');
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Alumnos Preregistrados</title>
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="../css/flexboxgrid.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/graficas.css">
    <link rel="shortcut icon" href="../favicon.ico">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'ALUMNOS PREREGISTRADOS POR TALLERES'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Taller',
            data: [

              <?php
              $sql = "SELECT taller FROM talleres";
              $resultado = $conexion->query($sql);
              $consulta = "(SELECT COUNT(*) as Inscritos FROM lista_oficial WHERE taller_1 = 'Bootstrap' OR taller_2 = 'Bootstrap' OR taller_3 = 'Bootstrap') UNION
              (SELECT COUNT(*) as Inscritos FROM lista_oficial WHERE taller_1 = 'Angular' OR taller_2 = 'Angular' OR taller_3 = 'Angular') UNION
              (SELECT COUNT(*) as Inscritos FROM lista_oficial WHERE taller_1 = 'Tienda En Drupal' OR taller_2 = 'Tienda En Drupal' OR taller_3 = 'Tienda En Drupal') UNION
              (SELECT COUNT(*) as Inscritos FROM lista_oficial WHERE taller_1 = 'Programacion En Android' OR taller_2 = 'Programacion En Android' OR taller_3 = 'Programacion En Android')";
              $resultado2 = $conexion->query($consulta);
              while(($row = $resultado->fetch_assoc()) && ($nuevo = $resultado2->fetch_assoc())){

             ?>

              ['<?php echo $row['taller']; ?>',  <?php echo $nuevo['Inscritos'] ?>],

            <?php

          }
             ?>
            ]
        }]
    });
});
		</script>
  </head>
  <body>

    <header>
      <div class="container">
          <h1 class="center-md">SISTEMA DE PREREGISTRO</h1>
      </div>
    </header>


    <script src="material/js/highcharts.js"></script>
    <script src="material/js/highcharts-3d.js"></script>
    <script src="material/js/modules/exporting.js"></script>

    <div id="container" style="height: 400px"></div>


  </body>
  <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
</html>
