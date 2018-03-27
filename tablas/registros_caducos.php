<?php

include("../procesos/conexion.php");

// Obtencion de la fecha
ini_set('date.timezone', 'America/Mexico_City');
$fecha_actual = date('d-m-Y', time());
$query= "SELECT fecha_registro,nombre FROM datos_alum";
$resultado = mysqli_query($conexion, $query);
while ($row = $resultado->fetch_assoc()) {
  $fecha_registro = $row['fecha_registro'];
  $nombre = $row['nombre'];
  $consulta = "UPDATE datos_alum SET estado = 'Caducado' WHERE nombre= '$nombre'";
  $consulta2 = "UPDATE datos_alum SET estado = 'Pendiente' WHERE nombre= '$nombre'";
  if ($fecha_actual > $fecha_registro+3) {
   echo $nombre." Fecha ".$fecha_registro." ya pasaron los tres dias ".$fecha_actual."<br>";
   $respuesta = mysqli_query($conexion, $consulta);
  }
  elseif ($fecha_actual < $fecha_registro+3) {
     echo $nombre." Fecha ".$fecha_registro." pendiente ".$fecha_actual."<br>";
      $respuesta2 = mysqli_query($conexion, $consulta2);
  }

  else {
   echo $nombre." Fecha ".$fecha_registro." pendiente ".$fecha_actual."<br>";
   // $respuesta2 = mysqli_query($conexion, $consulta2);
  }

}



 ?>
