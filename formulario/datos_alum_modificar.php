<!DOCTYPE html>
<html>
  <head lang="es">
    <meta charset="utf-8">
    <title>Modificar Datos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="../css/flexboxgrid.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sistema.css">
    <link rel="shortcut icon" href="../favicon.ico">
  </head>
  <body>

    <?php

      $RFC = $_REQUEST['RFC'];
      include("../procesos/conexion.php");

      $query = "SELECT * FROM datos_alum WHERE RFC = '$RFC'";
      $resultado = $conexion->query($query);

      $row=$resultado->fetch_assoc();

    ?>

    <header>
      <div class="container">
        <h1 class="center-md">Datos De Usuario</h1>
      </div>
    </header>
<br>
  <div class="container">

  <form class="form-horizontal" action="../procesos/modificar_datos_pro.php" method="post">



      <div class="form-group">
        <label for="RFC" class="control-label col-md-1 ">RFC:</label>
        <div class="col-md-3">
          <input type="text" name="RFC" class="form-control" value="<?php echo $row['RFC']; ?>" maxlength="13" REQUIRED>
        </div>
      </div>

      <div class="form-group">
        <label for="nombre" class="control-label col-md-1 ">Nombre:</label>
        <div class="col-md-2">
          <input type="text" name="nombre" class="form-control" value="<?php echo $row['nombre']; ?>" REQUIRED>
        </div>

        <label for="apellido_p" class="control-label col-md-2 ">Apellido Paterno:</label>
        <div class="col-md-2">
          <input type="text" name="apellido_p" class="form-control" value="<?php echo $row['apellido_p']; ?>" REQUIRED>
        </div>

        <label for="apellido_m" class="control-label col-md-2 ">Apellido Materno:</label>
        <div class="col-md-2">
          <input type="text" name="apellido_m" class="form-control" value="<?php echo $row['apellido_m']; ?>" REQUIRED>
        </div>

      </div>



      <div class="form-group">
        <label for="taller_1" class="control-label col-md-1 ">Taller 1:</label>
        <select class="form-control col-md-3" id="taller_1" name="taller_1" value="<?php echo $row['taller_1']; ?>" REQUIRED>
          <option value="0">Selección:</option>
          <?php
              include("../procesos/conexion.php");
          $query = $conexion -> query ("SELECT clave,taller FROM talleres");
          while ($valores = mysqli_fetch_array($query)) {
             echo '<option value="'.$valores[taller].'">'.utf8_encode($valores[taller]).'</option>';
          }
        ?>
        </select>

        <label for="taller_2" class="control-label col-md-1 ">Taller 2:</label>
        <select class="form-control col-md-3" name="taller_2" value="<?php echo $row['taller_2']; ?>" REQUIRED>
          <option value="0">Selección:</option>
          <?php
              include("../procesos/conexion.php");
          $query = $conexion -> query ("SELECT clave,taller FROM talleres");
          while ($valores = mysqli_fetch_array($query)) {
             echo '<option value="'.$valores[taller].'">'.utf8_encode($valores[taller]).'</option>';
          }
        ?>
        </select>

        <label for="taller_3" class="control-label col-md-1 ">Taller 3:</label>
        <select class="form-control col-md-3" name="taller_3" value="<?php echo $row['taller_3']; ?>" REQUIRED>
          <option value="0">Selección:</option>
          <?php
              include("../procesos/conexion.php");
          $query = $conexion -> query ("SELECT clave,taller FROM talleres");
          while ($valores = mysqli_fetch_array($query)) {
             echo '<option value="'.$valores[taller].'">'.utf8_encode($valores[taller]).'</option>';
          }
        ?>
        </select>

      </div>



      <div class="form-group">
        <label for="conferencia" class="control-label col-md-1 ">Conferencia:</label>
        <div class="col-md-5">
          <select class="form-control" name="conferencia" value="<?php echo $row['conferencia']; ?>" REQUIRED>
            <option value="0">Selección:</option>
            <?php
                include("../procesos/conexion.php");
            $query = $conexion -> query ("SELECT conferencia FROM conferencias");
            while ($valores = mysqli_fetch_array($query)) {
               echo '<option value="'.$valores[conferencia].'">'.utf8_encode($valores[conferencia]).'</option>';
            }
          ?>
          </select>
        </div>

        <label for="insti_proce" class="control-label col-md-3">Institución de Procedencia:</label>
        <div class="col-md-3">
          <input type="text" name="insti_proce" class="form-control" value="<?php echo $row['insti_proce']; ?>" REQUIRED>
        </div>
     </div>


     <div class="form-group">
       <label for="mail" class="control-label col-md-1 ">E-mail:</label>
       <div class="col-md-3">
         <input type="email" name="mail" class="form-control" value="<?php echo $row['mail']; ?>" REQUIRED>
       </div>

       <label for="conf_mail" class="control-label col-md-2 ">Confirmación de E-mail:</label>
       <div class="col-md-3">
         <input type="email" name="conf_mail" class="form-control" REQUIRED>
       </div>

     </div>

     <div class="form-group">
       <label for="estado" class="control-label col-md-1 ">Estado:</label>
       <select class="form-control col-md-3" name="estado" REQUIRED>
         <option value="Pendiente">Pendiente</option>
         <option value="Pagado">Pagado</option>
       </select>
     </div>


      <div class="form-group">
        <div class=" col-xs-1 col-md-1 col-md-offset-1">
          <input class="btn btn-success" type="submit" value="Aceptar" />
          <!-- <button type="submit" class="btn btn-success" name="button"><span class="glyphicon glyphicon-send"> Registrar</button> -->
        </div>

        <div class=" col-xs-1 col-md-1 pull-right">
          <a href="../tablas/alumnos_registrados.php" class="btn btn-danger">Cancelar</a>
        </div>


      </div>

    </form>

  </div>



  </body>
</html>
