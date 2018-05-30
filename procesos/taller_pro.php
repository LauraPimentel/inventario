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
  $imagen = $_POST["imagen"];

  // $consulta = "INSERT INTO talleres VALUES ('$clave','$taller','$lugar','$fecha','$hora','$tallerista','$capacidad','$hora_ter','$imagen')";
  $jornada1 = "INSERT INTO jornada1 VALUES ('$clave','$taller','$lugar','$fecha','$hora','$tallerista','$capacidad','$hora_ter','$imagen')";
  $jornada2 = "INSERT INTO jornada2 VALUES ('$clave','$taller','$lugar','$fecha','$hora','$tallerista','$capacidad','$hora_ter','$imagen')";
  $jornada3 = "INSERT INTO jornada3 VALUES ('$clave','$taller','$lugar','$fecha','$hora','$tallerista','$capacidad','$hora_ter','$imagen')";
  // $resultado = mysqli_query($conexion, $consulta);
  $resultado2 = mysqli_query($conexion, $jornada1);
  $resultado3 = mysqli_query($conexion, $jornada2);
  $resultado4 = mysqli_query($conexion, $jornada3);



  if($resultado2){
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
