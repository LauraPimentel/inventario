<?php
$taller_1 = 'Angular';
include('procesos/conexion.php');
$consulta = "UPDATE jornada1 SET capacidad = capacidad + 1 WHERE taller = '$taller_1'";
$resultado = $conexion->query($consulta);

if ($resultado) {
  echo '<script>
    alert("Datos Actualizados");

  </script>';
}

else{
echo '<script>
  alert("Error al modificar");

</script>';
}


 ?>
------------------------------------------------------------------------------------------------------------------
<?php
$taller_1 = 'Angular';
include('procesos/conexion.php');
$consulta = "UPDATE jornada1 SET capacidad = capacidad - 1 WHERE taller = '$taller_1'";
$resultado = $conexion->query($consulta);

if ($resultado) {
  echo '<script>
    alert("Datos Actualizados");

  </script>';
}

else{
echo '<script>
  alert("Error al modificar");

</script>';
}


 ?>

 ----------------------------------------------------------------------------------------------------
 --------------------------------------------------------------------------
<?php

include('procesos/conexion.php');

$query = "(SELECT COUNT(*) as Inscritos FROM lista_oficial WHERE taller_1 = 'Bootstrap' OR taller_2 = 'Bootstrap' OR taller_3 = 'Bootstrap') UNION
(SELECT COUNT(*) as Inscritos FROM lista_oficial WHERE taller_1 = 'Angular' OR taller_2 = 'Angular' OR taller_3 = 'Angular') UNION
(SELECT COUNT(*) as Inscritos FROM lista_oficial WHERE taller_1 = 'Tienda En Drupal' OR taller_2 = 'Tienda En Drupal' OR taller_3 = 'Tienda En Drupal') UNION
(SELECT COUNT(*) as Inscritos FROM lista_oficial WHERE taller_1 = 'Programacion En Android' OR taller_2 = 'Programacion En Android' OR taller_3 = 'Programacion En Android')";

$resultado = $conexion->query($query);
while($row = $resultado->fetch_assoc()){

?>

<p>Alumnos: <?php echo $row['Inscritos']; ?></p>



<br>

 <?php
   }

?>

---------------------------------------------------------------------------------------------------------------

<?php


include('procesos/conexion.php');


$sql = "SELECT taller FROM talleres";

$capacidad = "SELECT capacidad FROM talleres WHERE capacidad >= 1";

$resultado = $conexion->query($sql);

$resultado2 = $conexion->query($capacidad);

while (($valores = mysqli_fetch_array($resultado)) && ($nuevo = mysqli_fetch_array($resultado2))) {

 // echo '<option value="'.$valores[taller].'">'.utf8_encode($valores[taller]).' || Capacidad: '.$valores[capacidad].'</option>';


  echo 'Taller: '.$valores['taller'].' Capacidad: '.$nuevo['capacidad'];



}


?>

----------------------------------------------------------------------------------------
<?php
$taller_1 = 'Angular';
include('procesos/conexion.php');
$consulta = "SELECT taller, (capacidad - 1) AS resta FROM jornada1 WHERE taller = '$taller_1'";
$resultado = $conexion->query($consulta);
$row=$resultado->fetch_assoc();

 ?>
 <p><?php echo $row['taller']; ?></p>
 <p><?php echo $row['resta']; ?></p>
