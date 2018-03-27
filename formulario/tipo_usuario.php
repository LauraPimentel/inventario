<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tipo de usuario</title>
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
        <h1 class="center-md">SISTEMA DE PREREGISTRO</h1>
      </div>
    </header>
<br>

    <div class="container">
      <h2 class="center-md">Tipo de Usuario</h2>
      <form class="form-horizontal" action="../procesos/tipo_usu.php" method="post">
        <div class="form-group">
          <label for="usuario" class="control-label col-md-1 ">Usuario:</label>
          <div class="col-md-3">
            <input type="text" name="usuario" class="form-control" REQUIRED>
          </div>
        </div>

        <div class="form-group">
          <label for="pass" class="control-label col-md-1 ">Contraseña:</label>
          <div class="col-md-3">
            <input type="password" name="pass" class="form-control" REQUIRED>
          </div>
        </div>

        <div class="form-group">
          <label for="tipo_usu" class="control-label col-md-1 ">Tipo de usuario:</label>
          <div class="col-md-4">
            <select class="form-control" name="tipo_usu" REQUIRED>
              <option value="Administrador">Administrador</option>
            </select>
            </div>
          </div>


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
</html>
