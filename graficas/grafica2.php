<?php
require_once('../procesos/conexion.php');
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
            type: 'column'
        },
        title: {
            text: 'World\'s largest cities per 2014'
        },
        subtitle: {
            text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Population (millions)'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Population in 2008: <b>{point.y:.1f} millions</b>'
        },
        series: [{
            name: 'Population',
            data: [
              <?php
              $sql = "SELECT taller FROM talleres";
              $resultado = $conexion->query($sql);
              $consulta = "(SELECT COUNT(*) as Inscritos FROM datos_alum WHERE taller_1 = 'Bootstrap' OR taller_2 = 'Bootstrap' OR taller_3 = 'Bootstrap') UNION
              (SELECT COUNT(*) as Inscritos FROM datos_alum WHERE taller_1 = 'Angular' OR taller_2 = 'Angular' OR taller_3 = 'Angular') UNION
              (SELECT COUNT(*) as Inscritos FROM datos_alum WHERE taller_1 = 'Tienda En Drupal' OR taller_2 = 'Tienda En Drupal' OR taller_3 = 'Tienda En Drupal') UNION
              (SELECT COUNT(*) as Inscritos FROM datos_alum WHERE taller_1 = 'Programacion En Android' OR taller_2 = 'Programacion En Android' OR taller_3 = 'Programacion En Android')";
              $resultado2 = $conexion->query($consulta);
              while(($row = $resultado->fetch_assoc()) && ($nuevo = $resultado2->fetch_assoc())){

             ?>

              ['<?php echo $row['taller']; ?>',  <?php echo $nuevo['Inscritos'] ?>],

            <?php

          }
             ?>
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
		</script>
	</head>
	<body>
<script src="material/js/highcharts.js"></script>
<script src="material/js/modules/exporting.js"></script>

<div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>

	</body>
</html>
