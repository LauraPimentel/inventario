<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="css/flexboxgrid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="shortcut icon" href="favicon.ico">
  </head>
  <body>

    <header>
      <div class="container">
          <h1 class="center-md">SISTEMA DE PREREGISTRO</h1>
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
            <a href="inicio_alumnos.php" class="navbar-brand">SISTEMA</a>
            <!-- <img src="imagenes/logo.png" width="50" alt=""> -->
          </div>

          <!-- Inicia Menu -->

          <div class="collapse navbar-collapse" id="navegacion-fm">
            <ul class="nav navbar-nav">
              <li class=""><a href="#">Inicio</a></li>
            </ul>

            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#"class="dropdown-toggle" data-toggle="dropdown" role="button">
                  Registrar <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="formulario/taller.html">Taller</a></li>
                  <li class="divider"></li>
                  <li><a href="formulario/conferencia.html">Conferencia</a></li>
                  <li class="divider"></li>
                  <li><a href="formulario/insertar_usuario_admin.php">Alumno</a></li>
                  <li class="divider"></li>
                  <li><a href="formulario/tipo_usuario.php">Administrador</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#"class="dropdown-toggle" data-toggle="dropdown" role="button">
                  Ver <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="tablas/alumnos_registrados.php">Alumnos Registrados</a></li>
                  <li class="divider"></li>
                  <li><a href="tablas/talleres.php">Talleres Registrados</a></li>
                  <li class="divider"></li>
                  <li><a href="tablas/lista_oficial.php">Lista Oficial</a></li>
                  <li class="divider"></li>
                  <li><a href="tablas/lista_usuarios.php">Lista De Usuarios</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#"class="dropdown-toggle" data-toggle="dropdown" role="button">
                  Imprimir <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Gafetes</a></li>
                  <li class="divider"></li>
                  <li><a href="procesos/imprimir/alumnos_inscritos.php" target="_blank">Alumnos Inscritos</a></li>

                  <!-- <li><a href="#">Alumnos por taller</a></li> -->
                  <li class="divider"></li>
                  <li><a href="formulario/preregistro.php" target="_blank">Preregistro</a></li>
                </ul>
              </li>

              <form class="navbar-form navbar-left" role="search" action="tablas/tablas_taller.php" method="post">
                <div class="form-group">
                  <label>Alumnos por taller:</label>
                  <input type="text" class="form-control" name="taller" value="" placeholder="Taller...">
                </div>
              </form>

            </ul>

            <ul class="nav navbar-nav navbar-right">

              <li><a href="sesion_admin.html">Salir</a></li>
            </ul>
          </div>

        </div>
      </nav>
    </div>





  </body>
  <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
</html>
