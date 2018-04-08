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
            <!-- <th colspan="1"><a href="../formulario/insertar_usuario_admin.php">Nuevo</a></th>
            <th colspan="2">
              <form class="navbar-form navbar-left" role="search" action="../tablas/busqueda_alum.php" method="post">
                 <div class="form-group">
                   <input type="text" class="form-control" name="nombre" value="" placeholder="Buscar...">
                 </div>
               </form>

            </th> -->
            <th colspan="6">Alumnos Registrados</th>
          </tr>
        </thead>
      <tr class="success">
        <th>ID</th>
        <th>Usuario</th>
        <th>Rango</th>

        <th colspan="1">Operaciones</th>
      </tr>

          <?php
            include("../procesos/conexion.php");

            $query1 = "SELECT * FROM usuarios";
            $resultados = $conexion->query($query1);
            while($row = $resultados->fetch_assoc()){

              ?>

              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo utf8_encode($row['usuario']);?></td>
                <th><?php echo utf8_encode($row['tipo_usu']);?></th>
                <td><a href="../procesos/eliminar_usuario.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>


              <?php

            }
          ?>

     </table>

    </div>

  <!-- </div> -->
<br>
    <a href="../inicio_admin.php" class="btn btn-primary col-md-offset-5">Regresar</a>
    </div>

  </body>
</html>
