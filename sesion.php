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
<br>
      <div class="container">

        <div class="parrafo center-md">
          Bienvenido al sistema de pregistro, presiona Entrar para continuar.
        </div>

        <form class="" action="inicio_alumnos.php" method="post">

          <div class="form-group">
            <input type="text" name="usuario" value="alumno" hidden>
          </div>

          <div class="form-group">
            <input type="password" name="pass" value="TecTux2018" hidden>
          </div>

<br>
            <div class="entrar">
                <button type="submit" class="btn btn-primary" name="button">Entrar</button>
            </div>

        </form>

      </div>


  </body>
  <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
</html>
