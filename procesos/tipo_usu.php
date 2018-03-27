<?php

  include("conexion.php");

  $usuario = $_POST['usuario'];
  $pass = $_POST['pass'];
  $tipo_usu = $_POST['tipo_usu'];

  $consulta = "INSERT INTO usuarios VALUES ('$usuario','$pass','$tipo_usu')";
  $resultado = mysqli_query($conexion, $consulta);

  if ($resultado) {
    echo ' <script>

      alert("Usuario Agregado");
      window.location="../inicio_admin.php";

    </script>';
  }

  else {
    echo ' <script>

      alert("Error");
      window.history.go(-1);

    </script>';
  }
 ?>
