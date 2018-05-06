<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Datos De Usuario</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
  <link rel="stylesheet" href="../css/flexboxgrid.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/sistema.css">
  <link rel="shortcut icon" href="../favicon.ico">
</head>

<body>

  <?php


    include("../procesos/conexion.php");

    $query = "SELECT * FROM talleres";
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

  <form class="form-horizontal" action="../procesos/datos_pro.php" method="post">



      <div class="form-group">
        <label for="RFC" class="control-label col-md-1 ">RFC:</label>
        <div class="col-md-3">
          <input type="text" name="RFC" style="text-transform:uppercase;" class="form-control" maxlength="13" REQUIRED>
        </div>
      </div>

      <div class="form-group">
        <label for="nombre" class="control-label col-md-1 ">Nombre:</label>
        <div class="col-md-2">
          <input type="text" name="nombre" style="text-transform:capitalize;" class="form-control nombre" REQUIRED>
        </div>

        <label for="apellido_p" class="control-label col-md-2 ">Apellido Paterno:</label>
        <div class="col-md-2">
          <input type="text" name="apellido_p" style="text-transform:capitalize;" class="form-control" REQUIRED>
        </div>

        <label for="apellido_m" class="control-label col-md-2 ">Apellido Materno:</label>
        <div class="col-md-2">
          <input type="text" name="apellido_m" style="text-transform:capitalize;" class="form-control" REQUIRED>
        </div>

      </div>



      <div class="form-group">
        <label for="taller_1" class="control-label col-md-1 ">Taller 1:</label>
        <select class="form-control col-md-3" name="taller_1" REQUIRED>
          <option value="0">Selección:</option>
          <?php
              include("../procesos/conexion.php");
          $query = $conexion -> query ("SELECT taller FROM talleres");
          $consulta = $conexion -> query ("SELECT capacidad FROM jornada1 WHERE capacidad >= 1");
          while (($valores = mysqli_fetch_array($query)) && ($nuevo = mysqli_fetch_array($consulta))) {
             echo '<option value="'.$valores[taller].'">'.utf8_encode($valores[taller]).' || Capacidad: '.$nuevo[capacidad].'</option>';
          }
        ?>
        </select>

        <label for="taller_2" class="control-label col-md-1 ">Taller 2:</label>
        <select class="form-control col-md-3" name="taller_2" REQUIRED>
          <option value="0">Selección:</option>
          <?php
              include("../procesos/conexion.php");
          $query = $conexion -> query ("SELECT taller FROM talleres");
            $consulta = $conexion -> query ("SELECT capacidad FROM jornada2 WHERE capacidad >= 1");
          while (($valores = mysqli_fetch_array($query)) && ($nuevo = mysqli_fetch_array($consulta))) {
             echo '<option value="'.$valores[taller].'">'.utf8_encode($valores[taller]).' || Capacidad: '.$nuevo[capacidad].'</option>';
          }
        ?>
        </select>

        <label for="taller_3" class="control-label col-md-1 ">Taller 3:</label>
        <select class="form-control col-md-3" name="taller_3" REQUIRED>
          <option value="0">Selección:</option>
          <?php
              include("../procesos/conexion.php");
          $query = $conexion -> query ("SELECT taller FROM talleres");
            $consulta = $conexion -> query ("SELECT capacidad FROM jornada3 WHERE capacidad >= 1");
          while (($valores = mysqli_fetch_array($query)) && ($nuevo = mysqli_fetch_array($consulta))) {
             echo '<option value="'.$valores[taller].'">'.utf8_encode($valores[taller]).' || Capacidad: '.$nuevo[capacidad].'</option>';
          }
        ?>
        </select>

      </div>



      <div class="form-group">
        <label for="conferencia" class="control-label col-md-1 ">Conferencia:</label>
        <div class="col-md-5">
          <select class="form-control" name="conferencia" REQUIRED>
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
          <input type="text" name="insti_proce" class="form-control" REQUIRED>
        </div>
     </div>


     <div class="form-group">
       <label for="mail" class="control-label col-md-1 ">E-mail:</label>
       <div class="col-md-3">
         <input type="email" name="mail" class="form-control" REQUIRED>
       </div>

       <label for="conf_mail" class="control-label col-md-2 ">Confirmación de E-mail:</label>
       <div class="col-md-3">
         <input type="email" name="conf_mail" class="form-control" REQUIRED>
       </div>

       <!-- <label for="capacidad" class="control-label col-md-1 ">Capacidad:</label>
       <div class="col-md-2">
         <input type="number" name="capacidad" value="<?php echo $row['capacidad']?>" class="form-control" readonly>
        <input type="number" name="lugar" value="1" class="form-control hidden">
       </div> -->

     </div>

     <!-- <div class="form-group">
       <label for="estado" class="control-label col-md-1 hidden">Estado:</label>
       <select class="form-control col-md-3 hidden" name="estado" REQUIRED>
         <option value="Pendiente">Pendiente</option>
       </select>
</div> -->

      <div class="form-group">
        <div class=" col-xs-1 col-md-1 col-md-offset-1">
          <input class="btn btn-success" type="submit" value="Registrar" />
          <!-- <button type="submit" class="btn btn-success" name="button"><span class="glyphicon glyphicon-send"> Registrar</button> -->
        </div>

        <div class=" col-xs-1 col-md-1 pull-right">
          <a href="../inicio_alumnos.php" class="btn btn-danger">Cancelar</a>
        </div>


      </div>

    </form>

    <b class="text-danger">Nota:</b><p>Para más información revisa tu correo donde se te darán más indicaciones.</p>

    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr class="success">
            <th colspan="2">Capacidad de los talleres</th>
          </tr>
        </thead>
        <tr class="warning">
          <th>Taller</th>
          <th>Capacidad</th>
        </tr>

        <?php
        include("../procesos/conexion.php");
          $query = "SELECT taller,capacidad FROM talleres";
          $resultado = $conexion->query($query);
          while ($row = $resultado->fetch_assoc()) {
            ?>

            <tr>
              <td class="success"><?php echo utf8_encode($row['taller']);?></td>
              <td class="success"><?php echo utf8_encode($row['capacidad']);?></td>
            </tr>

            <?php
          }
         ?>
      </table>

    </div>

  </div>



</body>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>

</html>
