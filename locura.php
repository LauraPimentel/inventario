<?php

include('procesos/conexion.php');
$taller_1 = 'Bootstrap';

$sql = "SELECT capacidad FROM talleres WHERE taller = $taller_1";
$resultado = $conexion->query($sql);
$fetch = mysqli_fetch_array($resultado);

echo $fetch['resultado'];



 ?>
