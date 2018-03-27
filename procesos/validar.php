<?php

  include("conexion.php");

  $usuario = $_POST["usuario"];
  $pass = $_POST["pass"];

  $verificar = "SELECT * FROM usuarios WHERE usuario ='$usuario' and pass = '$pass'";
  $resultado = mysqli_query($conexion, $verificar);
  $filas = mysqli_num_rows($resultado);

  if ($filas >0) {
    session_start();
    $_SESSION['usuario']=$usuario;
    echo '<script>
  alert("Bienvenido Administrador");
    window.location="../inicio_admin.php";
  </script>';
  }
  else {
    echo '<script>
  alert("Usuario no registrado o los datos fueron mal ingresados");
  window.history.go(-1);
  </script>';
}



 ?>
