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
            text: 'ALUMNOS PREGISTRADOS POR TALLERES'
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
              $sql = "SELECT taller FROM jornada1";
              $resultado = $conexion->query($sql);
              $consulta = "(SELECT COUNT(*) as Inscritos FROM datos_alum WHERE taller_1 = 'Bootstrap' OR taller_2 = 'Bootstrap' OR taller_3 = 'Bootstrap') UNION
              (SELECT COUNT(*) as Inscritos FROM datos_alum WHERE taller_1 = 'Angular' OR taller_2 = 'Angular' OR taller_3 = 'Angular') UNION
              (SELECT COUNT(*) as Inscritos FROM datos_alum WHERE taller_1 = 'Tienda En Drupal' OR taller_2 = 'Tienda En Drupal' OR taller_3 = 'Tienda En Drupal') UNION
              (SELECT COUNT(*) as Inscritos FROM datos_alum WHERE taller_1 = 'Servidores' OR taller_2 = 'Servidores' OR taller_3 = 'Servidores') UNION
              (SELECT COUNT(*) as Inscritos FROM datos_alum WHERE taller_1 = 'Arduino' OR taller_2 = 'Arduino' OR taller_3 = 'Arduino') UNION
              (SELECT COUNT(*) as Inscritos FROM datos_alum WHERE taller_1 = 'Proxmox' OR taller_2 = 'Proxmox' OR taller_3 = 'Proxmox') UNION
              (SELECT COUNT(*) as Inscritos FROM datos_alum WHERE taller_1 = 'Laravel' OR taller_2 = 'Laravel' OR taller_3 = 'Laravel')";
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

</html>
