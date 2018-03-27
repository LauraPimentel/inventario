<?php

  include("conexion.php");
  $RFC = $_REQUEST['RFC'];

  $consulta = "DELETE FROM datos_alum WHERE RFC = '$RFC'";
  $resultado = $conexion->query($consulta);

  if ($resultado) {
    echo '<script>
      alert("Dato Eliminado");
      window.history.go(-1);
    </script>';
  }

  else{
    echo '<script>
      alert("Error");
      window.history.go(-1);
    </script>';
  }



 ?>
