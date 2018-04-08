<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="css/flexboxgrid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sistema.css">
    <link rel="shortcut icon" href="favicon.ico">
  </head>
  <body>

    <header>
      <div class="container">
         <h1 class="center-md">SISTEMA DE PREGISTRO</h1>
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

            <ul class="nav navbar-nav navbar-right">
              <li><a href="formulario/insertar_usuario.php">Registrarme</a></li>
              <li><a href="#">Contáctanos</a></li>
            </ul>
          </div>

        </div>
      </nav>
    </div>

    <div class="container">

<!-- Talleres -->

      <?php
      include("procesos/conexion.php");
      $query = "SELECT * FROM talleres";
      $resultado = $conexion->query($query);

      while($row = $resultado->fetch_assoc()){
        ?>

          <div class="col-xs-6 col-md-3">
              <div class="thumbnail">
                <img src="<?php echo $row['imagen']; ?>">
                <div class="caption">
                <h5><?php echo utf8_encode($row['taller']);?></h5>
                 <h4><?php echo utf8_encode( $row['tallerista']); ?></h4>
                 <p>Fecha: <?php echo $row['fecha']; ?></p>
                 <p>Lugar: <?php echo $row['lugar']; ?></p>
                 <a href="../procesos/detalles_todos.php?ID_pro=<?php echo $row['ID_pro']; ?>" class="btn btn-info">Ver detalles</a>
                </div>
              </div>
           </div>

        <?php
      }
    ?>

<!-- Conferencias -->

<?php
include("procesos/conexion.php");
$query = "SELECT * FROM conferencias";
$resultado = $conexion->query($query);

while($row = $resultado->fetch_assoc()){
  ?>

    <div class="col-xs-6 col-md-3">
        <div class="thumbnail">
          <img src="<?php echo $row['imagen']; ?>">
          <div class="caption">
          <h5><?php echo utf8_encode($row['clave']);?></h5>
           <h4><?php echo utf8_encode( $row['conferencia']); ?></h4>
           <p>Fecha: <?php echo $row['hora']; ?></p>
           <p>Lugar: <?php echo $row['lugar']; ?></p>
           <a href="../procesos/detalles_todos.php?ID_pro=<?php echo $row['ID_pro']; ?>" class="btn btn-info">Ver detalles</a>
          </div>
        </div>
     </div>

  <?php
}
?>


        <!-- <div class="botones">
          <a href="formulario/insertar_usuario.php" class="btn btn-success">Reservar mi asistencia</a>
          <a href="sesion.php" class="btn btn-danger pull-right">Salir</a>
        </div> -->

    </div>


  </body>
  <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
</html>
