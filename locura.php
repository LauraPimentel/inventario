<?php

include('procesos/conexion.php');

// $consulta = "SELECT capacidad FROM talleres";
// $resultado=$conexion->query($consulta);
// $mas = 1;
// while ($row = $resultado->fetch_assoc()) {
//   echo "Capacidad: ".$row['capacidad']."<br>";
//
// }

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
