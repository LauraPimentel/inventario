<?php

  include("conexion.php");

  $clave = $_POST["clave"];
  $conferencia = $_POST["conferencia"];
  $lugar = $_POST["lugar"];
  $hora = $_POST["hora"];
  $capacidad = $_POST["capacidad"];

  $consulta = "INSERT INTO conferencias VALUES ('$clave','$conferencia','$lugar','$hora','$capacidad')";
  $resultado = mysqli_query($conexion,$consulta);

  if ($resultado) {
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
