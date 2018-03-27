<!DOCTYPE html>
<html>
  <head lang="es">
    <meta charset="utf-8">
    <title>Confirmar</title>
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

      $query = "SELECT RFC,nombre,apellido_p,apellido_m,taller_1,taller_2,taller_3,conferencia,insti_proce,mail,hora_registro,fecha_registro FROM datos_alum WHERE RFC = '$RFC'";
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
    <h2>¿Desea agregar este usuario a la lista oficial?</h2>
  <form class="form-horizontal" action="../procesos/lista_oficial.php" method="post">



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
        <label for="taller_1" class="control-label col-md-1 ">Taller 1:</label>
        <div class="col-md-3">
          <input type="text" name="taller_1" class="form-control" value="<?php echo utf8_encode($row['taller_1']);?>"readonly>
        </div>

        <label for="taller_2" class="control-label col-md-1 ">Taller 2:</label>
        <div class="col-md-3">
          <input type="text" name="taller_2" class="form-control" value="<?php echo utf8_encode($row['taller_2']);?>"readonly>
        </div>

        <label for="taller_3" class="control-label col-md-1 ">Taller 3:</label>
        <div class="col-md-3">
          <input type="text" name="taller_3" class="form-control" value="<?php echo utf8_encode($row['taller_3']);?>"readonly>
        </div>
      </div>



      <div class="form-group">
        <label for="conferencia" class="control-label col-md-1 ">Conferencia:</label>
        <div class="col-md-5">
          <input type="text" name="conferencia" class="form-control" value="<?php echo $row['conferencia']; ?>"readonly>
        </div>

        <label for="insti_proce" class="control-label col-md-3">Institución de Procedencia:</label>
        <div class="col-md-3">
          <input type="text" name="insti_proce" class="form-control" value="<?php echo $row['insti_proce']; ?>" readonly>
        </div>
     </div>


     <div class="form-group">
       <label for="mail" class="control-label col-md-1 ">E-mail:</label>
       <div class="col-md-3">
         <input type="email" name="mail" class="form-control" value="<?php echo utf8_encode($row['mail']);?>" readonly>
       </div>

       <div class="form-group">
         <label for="hora_registro" class="control-label col-md-1 ">Hora registro:</label>
         <div class="col-md-3">
           <input type="text" name="hora_registro" class="form-control" value="<?php echo utf8_encode($row['hora_registro']);?>"readonly>
         </div>

         <label for="fecha_registro" class="control-label col-md-1">Fecha registro:</label>
         <div class="col-md-2">
           <input type="text" name="fecha_registro" class="form-control" value="<?php echo utf8_encode($row['fecha_registro']);?>" readonly>
         </div>

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
