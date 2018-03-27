<?php

  include("conexion.php");
  $RFC = $_REQUEST['RFC'];
  $nombre = $_POST["nombre"];
  $apellido_p = $_POST["apellido_p"];
  $apellido_m = $_POST["apellido_m"];
  $taller_1 = $_POST["taller_1"];
  $taller_2 = $_POST["taller_2"];
  $taller_3 = $_POST["taller_3"];
  $conferencia = $_POST["conferencia"];
  $insti_proce = $_POST["insti_proce"];
  $mail = $_POST["mail"];
  $conf_mail = $_POST["conf_mail"];
  $estado = $_POST["estado"];

  $consulta = "UPDATE datos_alum SET  nombre = '$nombre', apellido_p = '$apellido_p', apellido_m = '$apellido_m', taller_1 = '$taller_1', taller_2 = '$taller_2', taller_3 = '$taller_3', conferencia = '$conferencia', insti_proce = '$insti_proce', mail = '$mail', conf_mail = '$conf_mail', estado = '$estado' WHERE RFC = '$RFC' ";
  $resultado = $conexion->query($consulta);

  if ($resultado) {
    echo '<script>
      alert("Datos modificados");
      window.location="../tablas/alumnos_registrados.php";
    </script>';
  }

  else{
    echo '<script>
      alert("Ha ocurrido un error");
    </script>';
  }
 ?>
