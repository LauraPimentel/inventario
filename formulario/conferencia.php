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
</html>
