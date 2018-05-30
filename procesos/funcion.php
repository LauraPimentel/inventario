<?php

function verificar_sesion(){
  if (!isset($_SESSION['usuario'])) {
    session_destroy($_SESSION);
    header("location:../inventario_prueba/sesion_admin.html");
  }
}


 ?>
