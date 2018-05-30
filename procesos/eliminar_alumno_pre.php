<?php

include("conexion.php");
$RFC = $_REQUEST['RFC'];
// $nombre = $_POST["nombre"];
// $apellido_p = $_POST["apellido_p"];
// $apellido_m = $_POST["apellido_m"];
$taller_1 = $_POST['taller_1'];
$taller_2 = $_POST['taller_2'];
$taller_3 = $_POST['taller_3'];
// $conferencia = $_POST["conferencia"];
// $insti_proce = $_POST["insti_proce"];
// $mail = $_POST["mail"];
// $estado = $_POST["estado"];


// sumar el espacio
$res1 = "UPDATE jornada1 SET capacidad = capacidad + 1 WHERE taller = '$taller_1'";
$resultado1 = $conexion->query($res1);
$res2 = "UPDATE jornada2 SET capacidad = capacidad + 1 WHERE taller = '$taller_2'";
$resultado2 = $conexion->query($res2);
$res3 = "UPDATE jornada3 SET capacidad = capacidad + 1 WHERE taller = '$taller_3'";
$resultado3 = $conexion->query($res3);
$consulta = "DELETE FROM datos_alum WHERE RFC = '$RFC'";
$resultado = $conexion->query($consulta);

// restas




if ($resultado1) {

  echo '<script>
    alert("Dato Eliminado");
    window.location="../tablas/alumnos_registrados.php";
  </script>';
}

else{
  echo '<script>
    alert("Error");
    window.history.go(-1);
  </script>';
}




 ?>
