<?php
require "fpdf.php";



class PDF extends FPDF{

}

// DEclaracion de la hoja
$pdf = new PDF('P','mm','Letter');
$pdf->SetMargins(20,18);
$pdf->AliasNbPages();
$pdf->AddPAge();

// Datos del titulo
$pdf->SetTextColor(0x00,0x00,0x00);
$pdf->SetFont("Arial","b",9);
$pdf->Cell(0,5,'usuario del sistema',0,1, 'C');

// Datos de conexion
$conexion = new mysqli("localhost","root","ana1996", "sistema");

// Mostrar la tablas
$pdf->Ln();
$RFC = 'ANSANGO283612';
$sql = "SELECT nombre,apellido_p,apellido_m,insti_proce WHERE RFC = '$RFC'";
$rec = mysqli_query($sql);
while ($row = mysqli_fetch_array($rec)) {
  $pdf->Cell(30,5,$row['RFC'],1,0,'C');
  $pdf->Cell(30,5,$row['nombre'],1,0,'C');
  $pdf->Cell(30,5,$row['apellido_p'],1,0,'C');
  $pdf->Cell(30,5,$row['apellido_m'],1,0,'C');
  $pdf->Cell(30,5,$row['insti_proce '],1,0,'C');
}



 ?>
