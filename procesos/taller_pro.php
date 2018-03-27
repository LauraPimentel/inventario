<?php

  include("conexion.php");

  $clave = $_POST["clave"];
  $taller = $_POST["taller"];
  $lugar = $_POST["lugar"];
  $fecha = $_POST["fecha"];
  $hora = $_POST["hora"];
  $tallerista = $_POST["tallerista"];
  $capacidad = $_POST["capacidad"];
  $hora_ter = $_POST["hora_ter"];

  $consulta = "INSERT INTO talleres VALUES ('$clave','$taller','$lugar','$fecha','$hora','$tallerista','$capacidad','$hora_ter')";
  $resultado = mysqli_query($conexion, $consulta);

  if($resultado){
    echo '<script>
    alert("Datos Guardados");
     window.location="../inicio_admin.php";
    </script>';
  }

  else {
    echo '<script>
      alert("Error");
      window.history.go(-1);
    </script>';
  }

 ?>
