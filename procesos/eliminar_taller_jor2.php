<?php

  include("conexion.php");
  $clave = $_REQUEST['clave'];

  $consulta = "DELETE FROM jornada2 WHERE clave = '$clave'";
  $resultado = $conexion->query($consulta);


  if ($resultado) {

    echo '<script>
      alert("Dato Eliminado");
      window.history.go(-1);
    </script>';
  }

  else{
    echo '<script>
      alert("Error de conexion");
      window.history.go(-1);
    </script>';
  }



 ?>
