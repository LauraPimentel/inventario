<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="../css/flexboxgrid.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="shortcut icon" href="../favicon.ico">
  </head>
  <body>
    <?php
    $RFC = $_REQUEST['RFC'];
    include("../procesos/conexion.php");

    $query = "SELECT RFC,nombre,apellido_p,apellido_m,insti_proce,taller_1,taller_2,taller_3,conferencia FROM lista_oficial WHERE RFC = '$RFC'";
    $resultado = $conexion->query($query);
    $row=$resultado->fetch_assoc();


     ?>


    <header>
      <div class="container">
          <h1 class="center-md">SISTEMA DE PREREGISTRO</h1>
      </div>
    </header>


    <div class="container">
      <h3>¿Desea imprimir el gafete?</h3>
<br>
      <form class="form-horizontal" action="../procesos/imprimir/gafetes.php" method="post">

        <div class="form-group">
          <label for="RFC" class="control-label col-md-1 ">RFC:</label>
          <div class="col-md-3">
            <input type="text" name="RFC" class="form-control" value="<?php echo $row['RFC']; ?>" maxlength="13" readonly>
          </div>
        </div>

        <div class="form-group">
          <label for="nombre" class="control-label col-md-1 ">Nombre:</label>
          <div class="col-md-2">
            <input type="text" name="nombre" class="form-control" value="<?php echo $row['nombre']; ?>" readonly>
          </div>

          <label for="apellido_p" class="control-label col-md-2 ">Apellido Paterno:</label>
          <div class="col-md-2">
            <input type="text" name="apellido_p" class="form-control" value="<?php echo $row['apellido_p']; ?>" readonly>
          </div>

          <label for="apellido_m" class="control-label col-md-2 ">Apellido Materno:</label>
          <div class="col-md-2">
            <input type="text" name="apellido_m" class="form-control" value="<?php echo $row['apellido_m']; ?>" readonly>
          </div>

        </div>

        <div class="form-group">
          <label for="insti_proce" class="control-label col-md-1 ">Procedencia:</label>
          <div class="col-md-3">
            <input type="text" name="insti_proce" class="form-control" value="<?php echo $row['insti_proce']; ?>" readonly>
          </div>

          <label for="conferencia" class="control-label col-md-1 ">Conferencia:</label>
          <div class="col-md-3">
            <input type="text" name="conferencia" class="form-control" value="<?php echo $row['conferencia']; ?>" readonly>
          </div>
        </div>


                <div class="form-group">
                  <label for="taller_1" class="control-label col-md-1 ">Taller 1:</label>
                  <div class="col-md-2">
                    <input type="text" name="taller_1" class="form-control" value="<?php echo $row['taller_1']; ?>" readonly>
                  </div>

                  <label for="taller_2" class="control-label col-md-2 ">Taller 2:</label>
                  <div class="col-md-2">
                    <input type="text" name="taller_2" class="form-control" value="<?php echo $row['taller_2']; ?>" readonly>
                  </div>

                  <label for="taller_3" class="control-label col-md-2 ">Taller 3:</label>
                  <div class="col-md-2">
                    <input type="text" name="taller_3" class="form-control" value="<?php echo $row['taller_3']; ?>" readonly>
                  </div>

                </div>

        <button type="submit" class="btn btn-success" name="button">Generar PDF <span class="glyphicon glyphicon-ok"></span></button>

      </form>

    </div>






  </body>
  <script src="../js/jquery.js"></script>
 <script src="../js/bootstrap.min.js"></script>
</html>
