<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Alumnos Registrados</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="../css/flexboxgrid.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/tablas.css">
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
            <th colspan="1"><a href="../formulario/insertar_usuario_admin.php">Nuevo</a></th>
            <th colspan="2">
              <form class="navbar-form navbar-left" role="search" action="" method="post">
                 <div class="form-group">
                   <input type="text" class="form-control" name="nombre" value="" placeholder="Buscar...">
                 </div>
               </form>

            </th>
            <th colspan="13">Alumnos Registrados</th>
          </tr>
        </thead>
      <tr class="success">
        <th>RFC</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Taller#1</th>
        <th>Taller#2</th>
        <th>Taller#3</th>
        <th>Conferencia</th>
        <th>Ins. Porcedencia</th>
        <th>E-mail</th>
        <th>Hora Registro</th>
        <th>Fecha Registro</th>
        <th>Estado</th>


        <th colspan="3">Operaciones</th>
      </tr>

          <?php
            include("../procesos/conexion.php");
            $nombre = $_REQUEST['nombre'];
            $query = "SELECT * FROM datos_alum WHERE nombre = '$nombre'";
            $resultado = $conexion->query($query);
            $filas = mysqli_num_rows($resultado);

          if($filas > 0){
            while($row = $resultado->fetch_assoc()){
              ?>

              <tr>
                <td><?php echo utf8_encode($row['RFC']);?></td>
                <th><?php echo utf8_encode($row['nombre']);?></th>
                <th><?php echo utf8_encode($row['apellido_p']);?></th>
                <td><?php echo utf8_decode($row['apellido_m']);?></td>
                <td><?php echo utf8_encode($row['taller_1']);?></td>
                <td><?php echo utf8_encode($row['taller_2']);?></td>
                <td><?php echo utf8_encode($row['taller_3']);?></td>
                <td><?php echo utf8_encode($row['conferencia']);?></td>
                <td><?php echo utf8_encode($row['insti_proce']);?></td>
                <td><?php echo utf8_encode($row['mail']);?></td>
                <td><?php echo utf8_encode($row['hora_registro']);?></td>
                <td><?php echo utf8_encode($row['fecha_registro']);?></td>
                <td><?php echo utf8_encode($row['estado']);?></td>
                <td><a href="../formulario/datos_alum_modificar.php?RFC=<?php echo $row['RFC']; ?>" class="btn btn-md btn-info btn-block">Modificar</a></td>
                <td><a href="../procesos/eliminar_datos.php?RFC=<?php echo $row['RFC']; ?>" class="btn btn-md btn-danger btn-block">Eliminar</a></td>
                <td><a href="../formulario/confirmar_oficial.php?RFC=<?php echo $row['RFC']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></a></td>
              </tr>

              <?php
            }
          }

          else {
            echo '<script> alert("Este alumno no esta registrado");
            window.history.go(-1);
            </script>';
          }

          ?>

     </table>

    </div>
  <!-- </div> -->

    <a href="alumnos_registrados.php" class="btn btn-primary col-md-offset-5">Regresar</a>
    </div>

  </body>
</html>
