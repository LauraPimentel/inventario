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
    <title>Conferencias</title>
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
          <h1 class="center-md">CONFERENCIAS</h1>
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

    <div class="container">
<br>
      <form class="form-horizontal" action="../procesos/confe_pro.php" method="post">
        <div class="form-group">
          <label for="clave" class="control-label col-md-1 ">Clave:</label>
          <div class="col-md-2">
            <input type="text" name="clave" style="text-transform:uppercase;" class="form-control" maxlength="4" REQUIRED>
          </div>
        </div>

        <div class="form-group">
          <label for="conferencia" class="control-label col-md-1 ">Conferencia:</label>
          <div class="col-md-2">
            <input type="text" name="conferencia" style="text-transform:capitalize;" class="form-control" REQUIRED>
          </div>

          <label for="lugar" class="control-label col-md-2 ">Lugar:</label>
          <div class="col-md-2">
            <input type="text" name="lugar" style="text-transform:capitalize;" class="form-control" REQUIRED>
          </div>

          <label for="hora" class="control-label col-md-2 ">Hora:</label>
          <div class="col-md-2">
            <input type="time" name="hora" style="text-transform:capitalize;" class="form-control" REQUIRED>
          </div>

        </div>

        <!-- <div class="form-group">
          <label for="capacidad" class="control-label col-md-1">Capacidad:</label>
          <div class="col-md-1">
            <input type="number" name="capacidad" class="form-control" REQUIRED>
          </div>

        </div> -->


        <div class="form-group">
          <div class=" col-xs-1 col-md-1 col-md-offset-1">
            <input class="btn btn-success" type="submit" value="Registrar" />
            <!-- <button type="submit" class="btn btn-success" name="button"><span class="glyphicon glyphicon-send"> Registrar</button> -->
          </div>

          <div class=" col-xs-1 col-md-1 pull-right">
            <a href="../inicio_admin.php" class="btn btn-danger">Cancelar</a>
          </div>


        </div>
      </form>
    </div>

  </body>
  <script src="../js/jquery.js"></script>
 <script src="../js/bootstrap.min.js"></script>
</html>
