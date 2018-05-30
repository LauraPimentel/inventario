<?php
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

    <div class="menu">
      <nav class="navbar navbar-default navbar-static-top fixed" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
                <span class="sr-only">Desplegar / Ocultar Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="../inicio_admin.php" class="navbar-brand">SISTEMA</a>
            <!-- <img src="imagenes/logo.png" width="50" alt=""> -->
          </div>

          <!-- Inicia Menu -->

          <div class="collapse navbar-collapse" id="navegacion-fm">
            <ul class="nav navbar-nav">
              <li class=""><a href="../inicio_admin.php">Inicio</a></li>
            </ul>

            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#"class="dropdown-toggle" data-toggle="dropdown" role="button">
                  Registrar <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="taller.php">Taller</a></li>
                  <li class="divider"></li>
                  <li><a href="conferencia.html">Conferencia</a></li>
                  <li class="divider"></li>
                  <li><a href="insertar_usuario_admin.php">Alumno</a></li>
                  <li class="divider"></li>
                  <li><a href="tipo_usuario.php">Administrador</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#"class="dropdown-toggle" data-toggle="dropdown" role="button">
                  Ver <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="../tablas/alumnos_registrados.php">Alumnos Pregistrados</a></li>
                  <li class="divider"></li>
                  <li><a href="../tablas/talleres.php">Talleres Registrados</a></li>
                  <li class="divider"></li>
                  <li><a href="../tablas/lista_oficial.php">Lista Oficial</a></li>
                  <li class="divider"></li>
                  <li><a href="../tablas/lista_usuarios.php">Lista De Usuarios</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#"class="dropdown-toggle" data-toggle="dropdown" role="button">
                  Imprimir <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="para_gafete.php" target="_blank">Gafetes</a></li>
                  <li class="divider"></li>
                  <li><a href="../procesos/imprimir/alumnos_inscritos.php" target="_blank">Alumnos Inscritos</a></li>

                  <!-- <li><a href="#">Alumnos por taller</a></li> -->
                  <li class="divider"></li>
                  <li><a href="preregistro.php" target="_blank">Preregistro</a></li>
                  <li class="divider"></li>
                  <li><a href="../procesos/imprimir/jornada1.php" target="_blank">Jornada 1</a></li>
                  <li class="divider"></li>
                  <li><a href="../procesos/imprimir/jornada2.php" target="_blank">Jornada 2</a></li>
                  <li class="divider"></li>
                  <li><a href="../procesos/imprimir/jornada3.php" target="_blank">Jornada 3</a></li>
                </ul>
              </li>

              <form class="navbar-form navbar-left" role="search" action="../tablas/tablas_taller.php" method="post">
                <div class="form-group">
                  <label>Alumnos por taller:</label>
                  <input type="text" class="form-control" name="taller" value="" placeholder="Taller...">
                </div>
              </form>


              <li class="dropdown">
                <a href="#"class="dropdown-toggle" data-toggle="dropdown" role="button">
                  Gráficas <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="../graficas/alumnos_pre.php">Alumnos Pregistrados</a></li>
                  <li class="divider"></li>
                  <li><a href="../graficas/alumnos_taller.php">Alumnos Registrados</a></li>
                </ul>
              </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#"class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-user">
                   <?php echo $_SESSION['usuario']; ?>
                </a>

                <ul class="dropdown-menu" role="menu">

                  <li><a href="../procesos/destroy.php">Salir</a></li>
                </ul>
              </li>
            </ul>
          </div>

        </div>
      </nav>
    </div>
    <!-- <div class="container"> -->

      <div class="table-responsive">
      <table class="table table-bordered table-hover table-condensed">
        <thead>
          <tr class="warning">
            <th colspan="1"><a href="../formulario/insertar_usuario_admin.php">Nuevo</a></th>
            <th colspan="2">
              <form class="navbar-form navbar-left" role="search" action="../tablas/busqueda_alum.php" method="post">
                 <div class="form-group">
                   <input type="text" class="form-control" name="nombre" value="" placeholder="Buscar...">
                 </div>
               </form>

            </th>
            <th colspan="13">Alumnos Pregistrados</th>
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
            ini_set('date.timezone', 'America/Mexico_City');
            $fecha_actual = date('d-m-Y', time());
            $query1 = "SELECT * FROM datos_alum";
            $resultados = $conexion->query($query1);
            while($row = $resultados->fetch_assoc()){
              $fecha_registro = $row['fecha_registro'];
              $nombre = $row['nombre'];
              $consulta = "UPDATE datos_alum SET estado = 'Caducado' WHERE nombre= '$nombre'";
              $consulta2 = "UPDATE datos_alum SET estado = 'Pendiente' WHERE nombre= '$nombre'";
              if ($fecha_actual > $fecha_registro+3) {
               // echo $nombre." Fecha ".$fecha_registro." ya pasaron los tres dias ".$fecha_actual."<br>";
               $respuesta = mysqli_query($conexion, $consulta);
              }
              elseif ($fecha_actual < $fecha_registro+3) {
                 // echo $nombre." Fecha ".$fecha_registro." pendiente ".$fecha_actual."<br>";
                  $respuesta2 = mysqli_query($conexion, $consulta2);
              }

              else {
               // echo $nombre." Fecha ".$fecha_registro." pendiente ".$fecha_actual."<br>";
               $respuesta2 = mysqli_query($conexion, $consulta);
              }
              ?>

              <tr>
                <td><?php echo utf8_encode($row['RFC']);?></td>
                <th><?php echo utf8_encode($row['nombre']);?></th>
                <th><?php echo utf8_encode($row['apellido_p']);?></th>
                <td><?php echo utf8_encode($row['apellido_m']);?></td>
                <td><?php echo utf8_encode($row['taller_1']);?></td>
                <td><?php echo utf8_encode($row['taller_2']);?></td>
                <td><?php echo utf8_encode($row['taller_3']);?></td>
                <td><?php echo utf8_encode($row['conferencia']);?></td>
                <td><?php echo utf8_encode($row['insti_proce']);?></td>
                <td><?php echo utf8_encode($row['mail']);?></td>
                <td><?php echo utf8_encode($row['hora_registro']);?></td>
                <td><?php echo utf8_encode($row['fecha_registro']);?></td>
                <td><?php echo utf8_encode($row['estado']);?></td>
                <td><a href="../formulario/datos_alum_modificar.php?RFC=<?php echo $row['RFC']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td><a href="../formulario/eliminar_datos_form.php?RFC=<?php echo $row['RFC']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
                <td><a href="../formulario/confirmar_oficial.php?RFC=<?php echo $row['RFC']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></a></td>
              </tr>

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
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</html>
