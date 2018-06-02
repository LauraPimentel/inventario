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
  </head>
  <body>

    <?php


      include("../procesos/conexion.php");

      $clave = $_REQUEST['clave'];
      $query = "SELECT * FROM jornada1 WHERE clave = '$clave'";
      $resultado = $conexion->query($query);

      $row=$resultado->fetch_assoc();

    ?>

    <header>
      <div class="container">
          <h1 class="center-md">Talleres</h1>
      </div>
    </header>

    <div class="container">
    <br>
      <form class="form-horizontal " action="../procesos/taller_mod_jor1.php" method="post">

        <div class="form-group">
          <label for="clave" class="control-label col-md-1 ">Clave:</label>
          <div class="col-md-2">
            <input type="text" name="clave" class="form-control" value="<?php echo $row['clave'];?>" REQUIRED>
          </div>
        </div>

        <div class="form-group">
          <label for="taller" class="control-label col-md-1 ">Taller:</label>
          <div class="col-md-2">
            <input type="text" name="taller" class="form-control" value="<?php echo utf8_encode($row['taller']); ?>" REQUIRED>
          </div>

          <label for="lugar" class="control-label col-md-2 ">Lugar:</label>
          <div class="col-md-2">
            <input type="text" name="lugar" class="form-control" value="<?php echo $row['lugar']; ?>" REQUIRED>
          </div>

          <label for="fecha" class="control-label col-md-2 ">Fecha:</label>
          <div class="col-md-2">
            <input type="date" name="fecha" class="form-control" value="<?php echo $row['fecha']; ?>" REQUIRED>
          </div>

        </div>

        <div class="form-group">
          <label for="hora" class="control-label col-md-1 ">Hora:</label>
          <div class="col-md-2">
            <input type="time" name="hora" class="form-control" value="<?php echo $row['hora']; ?>" REQUIRED>
          </div>

          <label for="tallerista" class="control-label col-md-2 ">Tallerista:</label>
          <div class="col-md-3">
            <input type="text" name="tallerista" class="form-control" value="<?php echo utf8_encode($row['tallerista']); ?>" REQUIRED>
          </div>

          <label for="capacidad" class="control-label col-md-2 ">Capacidad:</label>
          <div class="col-md-1">
            <input type="text" name="capacidad" class="form-control" value="<?php echo $row['capacidad']; ?>" REQUIRED>
          </div>

        </div>

        <div class="form-group">
          <label for="hora_ter" class="control-label col-md-1 ">Terminación:</label>
          <div class="col-md-2">
            <input type="time" name="hora_ter" class="form-control" value="<?php echo $row['hora_ter']; ?>" REQUIRED>
          </div>
        </div>

        <div class="form-group">
          <div class=" col-xs-1 col-md-1 col-md-offset-1">
            <input class="btn btn-success" type="submit" value="Registrar" />
            <!-- <button type="submit" class="btn btn-success" name="button"><span class="glyphicon glyphicon-send"> Registrar</button> -->
          </div>

          <div class=" col-xs-1 col-md-1 pull-right">
            <a href="../tablas/talleres.php" class="btn btn-danger">Cancelar</a>
          </div>


        </div>

      </form>

    </div>

  </body>
</html>
