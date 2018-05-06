<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="../css/flexboxgrid.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="shortcut icon" href="../favicon.ico">
  </head>
  <body>

    <header>
      <div class="container">
          <h1 class="center-md">SISTEMA DE PREREGISTRO</h1>
      </div>
    </header>

    <div class="container">
      <h3>Ingrese el RFC para localizar al estudiante.</h3>
<br>
      <form class="form-horizontal" action="../procesos/imprimir/gafetes.php" method="post">

        <label for="RFC" class="control-label col-md-1">RFC:</label>
        <input type="text" name="RFC" class="form-control col-md-2" maxlength="13" REQUIRED>
        <button type="submit" class="btn btn-success" name="button"><span class="glyphicon glyphicon-ok"></span></button>

      </form>

    </div>






  </body>
  <script src="../js/jquery.js"></script>
 <script src="../js/bootstrap.min.js"></script>
</html>
