<?php

  include("conexion.php");
  $id = $_REQUEST['id'];

  $consulta = "DELETE FROM usuarios WHERE id = '$id'";
  $resultado = $conexion->query($consulta);

  if ($resultado) {
    echo '<script>
      alert("Dato Eliminado");
      window.history.go(-1);
    </script>';
  }

  else{
    echo '<script>
      alert("Error en el sistema");
      window.history.go(-1);
    </script>';
  }



 ?>
