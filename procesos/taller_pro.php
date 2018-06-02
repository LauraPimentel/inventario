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
  $jornada = $_POST["jornada"];



if ($jornada==Jornada1) {
 $jornada1 = "INSERT INTO jornada1 VALUES ('$clave','$taller','$lugar','$fecha','$hora','$tallerista','$capacidad','$hora_ter','$imagen')";
 $resultado2 = mysqli_query($conexion, $jornada1);
 echo '<script>
 alert("Datos Guardados");
  window.location="../inicio_admin.php";
 </script>';
}
elseif ($jornada==Jornada2) {
  $jornada2 = "INSERT INTO jornada2 VALUES ('$clave','$taller','$lugar','$fecha','$hora','$tallerista','$capacidad','$hora_ter','$imagen')";
  $resultado3 = mysqli_query($conexion, $jornada2);
  echo '<script>
  alert("Datos Guardados");
   window.location="../inicio_admin.php";
  </script>';
}
elseif ($jornada==Jornada3) {
    $jornada3 = "INSERT INTO jornada3 VALUES ('$clave','$taller','$lugar','$fecha','$hora','$tallerista','$capacidad','$hora_ter','$imagen')";
      $resultado4 = mysqli_query($conexion, $jornada3);
      echo '<script>
      alert("Datos Guardados");
       window.location="../inicio_admin.php";
      </script>';
}



  // $consulta = "INSERT INTO talleres VALUES ('$clave','$taller','$lugar','$fecha','$hora','$tallerista','$capacidad','$hora_ter','$imagen')";



  // $resultado = mysqli_query($conexion, $consulta);





  // 
  // if($resultado2){
  //   echo '<script>
  //   alert("Datos Guardados");
  //    window.location="../inicio_admin.php";
  //   </script>';
  // }
  //
  // else {
  //   echo '<script>
  //     alert("Error");
  //     window.history.go(-1);
  //   </script>';
  // }

 ?>
