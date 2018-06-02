<?php

  include("conexion.php");

  $RFC = $_POST["RFC"];
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
  // $capacidad = $_POST["capacidad"];

  // $estado = $_POST["estado"];
  $lugar = 1;

  // Obtencion de la hora
  ini_set('date.timezone', 'America/Mexico_City');
  $hora_registro = date('H:i:s', time());

  // Obtencion de la fecha
  $fecha_registro = date('d-m-Y', time());

  // Quitar un espacio del tallers
  // $espacio = ($capacidad) - ($lugar);

  // Enviar por correo
  ini_set("sendmail_from",$mail);

  $consulta = "INSERT INTO datos_alum (RFC,nombre,apellido_p,apellido_m,taller_1,taller_2,taller_3,conferencia,insti_proce,mail,conf_mail,hora_registro,fecha_registro) VALUES (UPPER('$RFC'),UPPER('$nombre'),UPPER('$apellido_p'),UPPER('$apellido_m'),'$taller_1','$taller_2','$taller_3','$conferencia',UPPER('$insti_proce'),'$mail','$conf_mail','$hora_registro','$fecha_registro')";
  $jornada_1 = "INSERT INTO jornada1_alumnos (RFC,nombre,apellido_p,apellido_m,taller_1,taller_2,taller_3,conferencia,insti_proce,mail,conf_mail,hora_registro,fecha_registro) VALUES (UPPER('$RFC'),UPPER('$nombre'),UPPER('$apellido_p'),UPPER('$apellido_m'),'$taller_1','$taller_2','$taller_3','$conferencia',UPPER('$insti_proce'),'$mail','$conf_mail','$hora_registro','$fecha_registro')";
  $jornada_2 = "INSERT INTO jornada2_alumnos (RFC,nombre,apellido_p,apellido_m,taller_1,taller_2,taller_3,conferencia,insti_proce,mail,conf_mail,hora_registro,fecha_registro) VALUES (UPPER('$RFC'),UPPER('$nombre'),UPPER('$apellido_p'),UPPER('$apellido_m'),'$taller_1','$taller_2','$taller_3','$conferencia',UPPER('$insti_proce'),'$mail','$conf_mail','$hora_registro','$fecha_registro')";
  $jornada_3 = "INSERT INTO jornada3_alumnos (RFC,nombre,apellido_p,apellido_m,taller_1,taller_2,taller_3,conferencia,insti_proce,mail,conf_mail,hora_registro,fecha_registro) VALUES (UPPER('$RFC'),UPPER('$nombre'),UPPER('$apellido_p'),UPPER('$apellido_m'),'$taller_1','$taller_2','$taller_3','$conferencia',UPPER('$insti_proce'),'$mail','$conf_mail','$hora_registro','$fecha_registro')";

  // Restar el espacio
 $res1 = "UPDATE jornada1 SET capacidad = capacidad - 1 WHERE taller = '$taller_1'";
 $res2 = "UPDATE jornada2 SET capacidad = capacidad - 1 WHERE taller = '$taller_2'";
 $res3 = "UPDATE jornada3 SET capacidad = capacidad - 1 WHERE taller = '$taller_3'";

  // Enviar el correo
  $contenido = "Nombre: ".strtoupper($nombre)." ".strtoupper($apellido_p)." ".strtoupper($apellido_m)."\nLos talleres seleccionados son: ".$taller_1.", " .$taller_2.", " .$taller_3."\nLa conferencia es: ".$conferencia."\nCuenta con un lapso de 3 días para hacer su depósito. En la cuenta 6342810340 BANCO SANTANDER.
  Haber realizado este tramite no garantiza su lugar en el congreso, debe realizar el depósito y pasar a las instalaciones educativas para canjear su bauche, de esta manera usted quedará registrado";

  $verificar_rfc = mysqli_query($conexion, "SELECT RFC FROM datos_alum WHERE RFC = '$RFC'");

  // Verificar correo

  if (mysqli_num_rows($verificar_rfc) > 0) {
    echo ' <script>

           alert("El RFC ya está resgistrado, intente de nuevo");
            window.history.go(-1);

           </script>';


   exit;
  }

  if($mail==$conf_mail){
    $resultado = mysqli_query($conexion, $consulta);
    $resultadojor = mysqli_query($conexion, $jornada_1);
    $resultadojo2 = mysqli_query($conexion, $jornada_2);
    $resultadojor3 = mysqli_query($conexion, $jornada_3);
    // mail($mail, "Contacto", $contenido);

    // restas
    $resultado1 = $conexion->query($res1);
    $resultado2 = $conexion->query($res2);
    $resultado3 = $conexion->query($res3);

    if($resultado) {
      echo '<script>
      alert("Datos Guardados");
      window.location="../inicio_alumnos.php";
      </script>';

    }

    else{
      echo '<script>
        alert("Error al guardar datos");
        window.history.go(-1);
      </script>';
    }

  }

  else{
    echo '<script>
    alert("El correo no coincide");
  window.history.go(-1);
    </script>';
  }




  ?>
