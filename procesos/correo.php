<?php

$destino = "ana.pime.chocolate@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

ini_set("sendmail_from","ana.pime.chocolate@gmail.com");


$contenido = "Nombre: " . $nombre . "\nCorreo: ".$correo. "\nTeléfono: ".$telefono. "\nMensaje: ".$mensaje;

mail($destino, $nombre, $contenido);
echo "Correo enviado";



 ?>
