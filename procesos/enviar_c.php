<?php

  if (isset($_POST['RFC']) && !empty($_POST['RFC']) &&
      isset($_POST['nombre']) && !empty($_POST['nombre']) &&
      isset($_POST['taller_1']) && !empty($_POST['taller_1']) &&
      isset($_POST['taller_2']) && !empty($_POST['taller_2']) &&
      isset($_POST['taller_3']) && !empty($_POST['taller_3']) &&
      isset($_POST['mail']) && !empty($_POST['mail']))
   {

     $destinatario = $_POST['mail'];
     $asunto = "Este es un mensaje de prueba";
     $taller_1 = $_POST['taller_1'];
     $taller_1 = $_POST['taller_2'];
     $taller_1 = $_POST['taller_3'];
     $nombre = $_POST['nombre'];
     $desde = "De:" . "ana_pimentel_22@hotmail.com";

     mail($destinatario, $taller_1, $taller_2, $taller_3, $nombre, $asunto, $desde);

     echo "Correo Enviado";

  }
  else {
    echo "Correo no enviado";
  }



 ?>
