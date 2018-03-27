<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Talleres</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="../css/flexboxgrid.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sistema.css">
    <link rel="shortcut icon" href="../favicon.ico">
  </head>
  <body>

    <header>
      <div class="container">
        <h1 class="center-md">SISTEMA DE REGISTRO</h1>
      </div>
    </header>
<br>
    <!-- <div class="container"> -->

      <div class="table-responsive">

      <table class="table table-bordered table-hover table-condensed">
        <thead>
          <tr class="warning">
            <th colspan="1"><a href="#">Nuevo</a></th>
            <th colspan="1"><a href="#">Buscar</a></th>
            <th colspan="10">Talleres Registrados</th>
          </tr>
        </thead>
      <tr class="success">
        <th>Clave</th>
        <th>Taller</th>
        <th>Lugar</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Hora_ter</th>
        <th>Tallerista</th>
        <th>Capacidad</th>
        <th colspan="2">Operaciones</th>
      </tr>

          <?php
            include("../procesos/conexion.php");
            $query = "SELECT * FROM talleres";
            $resultado = $conexion->query($query);

            while($row = $resultado->fetch_assoc()){
              ?>

              <tr>

                <th><?php echo utf8_encode($row['clave']);?></th>
                <th><?php echo utf8_encode($row['taller']);?></th>
                <td><?php echo utf8_encode($row['lugar']);?></td>
                <td><?php echo utf8_encode($row['fecha']);?></td>
                <td><?php echo utf8_encode($row['hora']);?></td>
                <td><?php echo utf8_encode($row['hora_ter']);?></td>
                <td><?php echo utf8_encode($row['tallerista']);?></td>
                <td><?php echo utf8_encode($row['capacidad']);?></td>
                <td><a href="../formulario/modificar_taller.php?clave=<?php echo $row['clave']; ?>" class="btn btn-md btn-info btn-block">Modificar</a></td>
                <td><a href="../formulario/eliminar_taller.php?clave=<?php echo $row['clave']; ?>" class="btn btn-md btn-danger btn-block">Eliminar</a></td>

              </tr>

              <?php
            }
          ?>

     </table>

    </div>
  <!-- </div> -->

    <a href="../inicio_admin.php" class="btn btn-primary col-md-offset-5">Regresar</a>
    </div>

  </body>
</html>
