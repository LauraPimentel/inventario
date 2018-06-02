<?php


  include("conexion.php");

  $clave = $_REQUEST["clave"];
  $taller = $_POST["taller"];
  $lugar = $_POST["lugar"];
  $fecha = $_POST["fecha"];
  $hora = $_POST["hora"];
  $tallerista = $_POST["tallerista"];
  $capacidad = $_POST["capacidad"];
  $hora_ter = $_POST["hora_ter"];


  $query = "UPDATE jornada1 SET taller = '$taller', lugar = '$lugar', fecha = '$fecha', hora = '$hora', tallerista = '$tallerista', capacidad = '$capacidad', hora_ter = '$hora_ter' WHERE clave = '$clave'";
  $resultado = $conexion->query($query);

  if ($resultado) {
    echo '<script>
      alert("Datos Actualizados");
      window.location="../tablas/talleres.php";
    </script>';
  }

else{
  echo '<script>
    alert("Error al modificar");
    window.history.go(-1)
  </script>';
}

 ?>
