<?php
require_once('../procesos/conexion.php');
session_start();
if (isset($_SESSION['usuario'])) {

}
else{
  header("location:../sesion_admin.html");
}

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
    <script type="text/javascript" src="../js/jquery.min.js"></script>
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
            text: 'ALUMNOS PREGISTRADOS POR TALLERE JORNADA 1'
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
              // $sql = "SELECT taller FROM jornada1";
              // $resultado = $conexion->query($sql);
              $consulta = "SELECT jornada1.taller,jornada1_alumnos.taller_1, count(*) AS Inscritos FROM jornada1,jornada1_alumnos WHERE jornada1.taller=jornada1_alumnos.taller_1 GROUP BY taller";
              $resultado2 = $conexion->query($consulta);
              while($nuevo = $resultado2->fetch_assoc()){

             ?>

              ['<?php echo $nuevo['taller']; ?>',  <?php echo $nuevo['Inscritos'] ?>],

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

</html>
