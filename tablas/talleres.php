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
    <title>Talleres</title>
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
                  <li><a href="../formulario/taller.php">Taller</a></li>
                  <li class="divider"></li>
                  <li><a href="../formulario/conferencia.php">Conferencia</a></li>
                  <li class="divider"></li>
                  <li><a href="../formulario/insertar_usuario_admin.php">Alumno</a></li>
                  <li class="divider"></li>
                  <li><a href="../formulario/tipo_usuario.php">Administrador</a></li>
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
                  <li><a href="../formulario/para_gafete.php" target="_blank">Gafetes</a></li>
                  <li class="divider"></li>
                  <li><a href="../procesos/imprimir/alumnos_inscritos.php" target="_blank">Alumnos Inscritos</a></li>

                  <!-- <li><a href="#">Alumnos por taller</a></li> -->
                  <li class="divider"></li>
                  <li><a href="../formulario/preregistro.php" target="_blank">Preregistro</a></li>
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
<h1>Jornada 1</h1>
      <table class="table table-bordered table-hover table-condensed">
        <thead>
          <tr class="warning">
            <!-- <th colspan="1"><a href="#">Nuevo</a></th>
            <th colspan="1"><a href="#">Buscar</a></th> -->
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
        <!-- <th>Inscritos</th> -->
        <th colspan="2">Operaciones</th>
      </tr>

          <?php
            include("../procesos/conexion.php");
            // $query = "SELECT * FROM talleres";
            // $resultado = $conexion->query($query);
            $consulta = "SELECT * FROM jornada1";
            // $consulta = "(SELECT COUNT(*) as Inscritos FROM lista_oficial WHERE taller_1 = 'Bootstrap' OR taller_2 = 'Bootstrap' OR taller_3 = 'Bootstrap') UNION
            // (SELECT COUNT(*) as Inscritos FROM lista_oficial WHERE taller_1 = 'Angular' OR taller_2 = 'Angular' OR taller_3 = 'Angular') UNION
            // (SELECT COUNT(*) as Inscritos FROM lista_oficial WHERE taller_1 = 'Tienda En Drupal' OR taller_2 = 'Tienda En Drupal' OR taller_3 = 'Tienda En Drupal') UNION
            // (SELECT COUNT(*) as Inscritos FROM lista_oficial WHERE taller_1 = 'Programacion En Android' OR taller_2 = 'Programacion En Android' OR taller_3 = 'Programacion En Android')";
            $resultado2 = $conexion->query($consulta);
            // while(($row = $resultado->fetch_assoc()) && ($nuevo = $resultado2->fetch_assoc()))
            while($row = $resultado2->fetch_assoc()){

              ?>


              <tr class="success">

                <th><?php echo utf8_encode($row['clave']);?></th>
                <th><?php echo utf8_encode($row['taller']);?></th>
                <td><?php echo utf8_encode($row['lugar']);?></td>
                <td><?php echo utf8_encode($row['fecha']);?></td>
                <td><?php echo utf8_encode($row['hora']);?></td>
                <td><?php echo utf8_encode($row['hora_ter']);?></td>
                <td><?php echo utf8_encode($row['tallerista']);?></td>
                <td><?php echo utf8_encode($row['capacidad']);?></td>
                <!-- <td><?php echo $nuevo['Inscritos'] ?></td> -->
                <td><a href="../formulario/editar_taller_jor1.php?clave=<?php echo $row['clave']; ?>" class="btn btn-md btn-info btn-block">Modificar</a></td>
                <td><a href="../procesos/eliminar_taller_jor1.php?clave=<?php echo $row['clave']; ?>" class="btn btn-md btn-danger btn-block">Eliminar</a></td>

              </tr>

              <?php

            }
          ?>

     </table>



     <!-- jornada 2 -->
<h1>Jornada 2</h1>
     <table class="table table-bordered table-hover table-condensed">
       <thead>
         <tr class="warning">
           <!-- <th colspan="1"><a href="#">Nuevo</a></th>
           <th colspan="1"><a href="#">Buscar</a></th> -->
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
       <!-- <th>Inscritos</th> -->
       <th colspan="2">Operaciones</th>
     </tr>

         <?php
           include("../procesos/conexion.php");

           $consulta2 = "SELECT * FROM jornada2";

           $resultado3 = $conexion->query($consulta2);

           while($row = $resultado3->fetch_assoc()){

             ?>


             <tr class="success">

               <th><?php echo utf8_encode($row['clave']);?></th>
               <th><?php echo utf8_encode($row['taller']);?></th>
               <td><?php echo utf8_encode($row['lugar']);?></td>
               <td><?php echo utf8_encode($row['fecha']);?></td>
               <td><?php echo utf8_encode($row['hora']);?></td>
               <td><?php echo utf8_encode($row['hora_ter']);?></td>
               <td><?php echo utf8_encode($row['tallerista']);?></td>
               <td><?php echo utf8_encode($row['capacidad']);?></td>
               <!-- <td><?php echo $nuevo['Inscritos'] ?></td> -->
               <td><a href="../formulario/editar_taller_jor2.php?clave=<?php echo $row['clave']; ?>" class="btn btn-md btn-info btn-block">Modificar</a></td>
               <td><a href="../formulario/eliminar_taller_jor2.php?clave=<?php echo $row['clave']; ?>" class="btn btn-md btn-danger btn-block">Eliminar</a></td>

             </tr>

             <?php

           }
         ?>

    </table>

    <!-- jornada 3 -->
<h1>Jornada 3</h1>
    <table class="table table-bordered table-hover table-condensed">
      <thead>
        <tr class="warning">
          <!-- <th colspan="1"><a href="#">Nuevo</a></th>
          <th colspan="1"><a href="#">Buscar</a></th> -->
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
      <!-- <th>Inscritos</th> -->
      <th colspan="2">Operaciones</th>
    </tr>

        <?php
          include("../procesos/conexion.php");

          $consulta3 = "SELECT * FROM jornada3";

          $resultado4 = $conexion->query($consulta3);

          while($row = $resultado4->fetch_assoc()){

            ?>


            <tr class="success">

              <th><?php echo utf8_encode($row['clave']);?></th>
              <th><?php echo utf8_encode($row['taller']);?></th>
              <td><?php echo utf8_encode($row['lugar']);?></td>
              <td><?php echo utf8_encode($row['fecha']);?></td>
              <td><?php echo utf8_encode($row['hora']);?></td>
              <td><?php echo utf8_encode($row['hora_ter']);?></td>
              <td><?php echo utf8_encode($row['tallerista']);?></td>
              <td><?php echo utf8_encode($row['capacidad']);?></td>
              <!-- <td><?php echo $nuevo['Inscritos'] ?></td> -->
              <td><a href="../formulario/editar_taller_jor3.php?clave=<?php echo $row['clave']; ?>" class="btn btn-md btn-info btn-block">Modificar</a></td>
              <td><a href="../formulario/eliminar_taller_jor3.php?clave=<?php echo $row['clave']; ?>" class="btn btn-md btn-danger btn-block">Eliminar</a></td>

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
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</html>
