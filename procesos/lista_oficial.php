<?php
include("conexion.php");

  $RFC = $_REQUEST["RFC"];
  $nombre = $_POST["nombre"];
  $apellido_p = $_POST["apellido_p"];
  $apellido_m = $_POST["apellido_m"];
  $taller_1 = $_POST["taller_1"];
  $taller_2 = $_POST["taller_2"];
  $taller_3 = $_POST["taller_3"];
  $conferencia = $_POST["conferencia"];
  $insti_proce = $_POST["insti_proce"];
  $mail = $_POST["mail"];
  $hora_registro = $_POST["hora_registro"];
  $fecha_registro = $_POST["fecha_registro"];

  $oficial = "INSERT INTO lista_oficial VALUES ('$RFC','$nombre','$apellido_p','$apellido_m','$taller_1','$taller_2','$taller_3','$conferencia','$insti_proce','$mail','$hora_registro','$fecha_registro')";


  $resultado = $conexion->query($oficial);
  $eliminar = "DELETE FROM datos_alum WHERE RFC = '$RFC'";


  if ($resultado) {
      $resultado2 = $conexion->query($eliminar);
    echo '<script>
      alert("El usuario ha sido agregado a la lista oficial");
      window.location="../tablas/lista_oficial.php";
    </script>';

  }
  else {
    echo '<script>
      alert("Error");
      window.history.go(-1);
    </script>';
  }


 ?>
