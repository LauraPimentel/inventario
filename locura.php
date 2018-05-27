<?php
$taller_1 = 'Angular';
include('procesos/conexion.php');
$consulta = "UPDATE jornada1 SET capacidad = capacidad - 1 WHERE taller = '$taller_1'";
$resultado = $conexion->query($consulta);

if ($resultado) {
  echo '<script>
    alert("Datos Actualizados");

  </script>';
}

else{
echo '<script>
  alert("Error al modificar");

</script>';
}


 ?>
