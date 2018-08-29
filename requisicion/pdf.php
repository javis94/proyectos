
<?php

include 'plantilla.php';
require 'conexion.php';

$sql ="SELECT *FROM requisicion ORDER by numero_requisicion DESC LIMIT 1";
$resultado=mysqli_query ($conexion,$sql);
$resultados=$resultado;
$pdf = new PDF();	
$pdf->AddPage();
$pdf->SetXY(70,30);	

$pdf->Cell(100, 5, 'Informacion del cargo:', 0, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->SetXY(10,40);	
$pdf->Cell(42, 10, 'Numero de Requisicion:', 0, 0, 'L');
$x=$pdf->GETX();
$pdf->SetX($x+48);
$pdf->Cell(35, 5, 'Fecha de Solicitud:', 0,0, 'R');
$y=$pdf->GETY();
$pdf->SetY($y+10);
$pdf->Cell(20, 5, 'Solicitante:', 0,0, 'L');
$pdf->SetX($x+50);
$pdf->Cell(30, 5, 'Departamento:', 0,0, 'R');
$pdf->SetY($y+20);
$pdf->Cell(30, 5, 'Tipo de Solicitud:', 0,0, 'L');
$pdf->SetX($x+52);
$pdf->Cell(55, 5, 'Fecha Maxima de Cubrimiento:', 0,1, 'R');

$pdf->SetXY(10,75);	
$pdf->Cell(50, 5, 'Nombre de la Vacante:', 0,1, 'C');

$pdf->SetXY(10,85);	
$pdf->Cell(45, 5, 'Remplazo De:', 0,1, 'C');

$pdf->SetXY(10,95);	
$pdf->Cell(32, 5, 'Tipo de Contrato:', 0, 0, 'L');
$x=$pdf->GETX();
$pdf->SetX($x+80);
$pdf->Cell(27, 5, 'Ubicacion:', 0,0, 'R');

$pdf->SetXY(10,105);	
$pdf->Cell(40, 5, 'Autorizacion del Lider:', 0, 0, 'L');
$x=$pdf->GETX();
$pdf->SetX($x+72);
$pdf->Cell(27, 5, 'Aprobacion:', 0,0, 'R');

$pdf->SetFont('Arial','B',12);
$pdf->SetXY(80,120);	
$pdf->Cell(50, 5, 'Requisitos de la Vacante', 0, 0, 'C');

$pdf->SetFont('Arial','B',10);

$pdf->SetXY(10,130);	
$pdf->Cell(50, 5, 'Estudios:', 0, 0, 'L');
$x=$pdf->GETX();
$pdf->SetX($x+35);
$pdf->Cell(50, 5, 'Sexo:', 0,0, 'R');


$pdf->SetXY(10,140);	
$pdf->Cell(50, 5, 'Edad:', 0, 0, 'L');
$pdf->Cell(55, 5, 'A:', 0, 0, 'L');
$x=$pdf->GETX();
$pdf->SetX($x+10);
$pdf->Cell(20, 5, 'Estado Civil:', 0,0, 'R');


$pdf->SetXY(10,160);	
$pdf->Cell(50, 5, 'Experiencia:', 0, 0, 'L');

$pdf->SetXY(10,180);	
$pdf->Cell(50, 5, 'Conocimientos:', 0, 0, 'L');

$pdf->SetXY(10,200);	
$pdf->Cell(50, 5, 'Habilidades:', 0, 0, 'L');

$pdf->SetXY(10,220);	
$pdf->Cell(50, 5, 'Competencias:', 0, 0, 'L');

$pdf->SetXY(10,240);	
$pdf->Cell(50, 5, 'Deseables y/o Adicionales:', 0, 0, 'L');

$pdf->SetXY(50,265);	
$pdf->Cell(50, 5, '__________________________', 0, 0, 'L');

$pdf->SetXY(130,265);	
$pdf->Cell(50, 5, '__________________________', 0, 0, 'L');

$pdf->SetXY(50,270);	
$pdf->Cell(70, 5, 'Recibe', 0, 0, 'L');

$pdf->SetXY(130,270);	
$pdf->Cell(70, 5, 'Autoriza', 0, 0, 'L');



while ($row = $resultado->fetch_assoc()) {
$pdf->SetFont('Arial','B',10);
$pdf->SetXY(60,40);	
$pdf->Cell(40, 5, $row['numero_requisicion'], 1, 0, 'L');
$pdf->SetXY(140,40);
$pdf->Cell(50, 5, $row['fecha_solicitud'], 1,0, 'R');
$pdf->SetXY(35,50);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(65, 5, $row['Nombre'], 1,0, 'L');
$pdf->SetXY(140,50);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50, 5, $row['departamento'], 1,0, 'R');
$pdf->SetXY(50,60);
$pdf->Cell(50, 5, $row['tipo_solicitud'], 1,0, 'L');
$pdf->SetXY(160,60);
$pdf->Cell(30, 5, $row['fecha_maxima_cubrimiento'], 1,1, 'R');

$pdf->SetFont('Arial','B',8);
$pdf->SetXY(70,75);	
$pdf->Cell(110, 5, $row['vacante'], 1,1, 'C');

$pdf->SetFont('Arial','B',8);
$pdf->SetXY(50,85);	
$pdf->Cell(130, 5, $row['remplazo'], 1,1, 'C');

$pdf->SetFont('Arial','B',10);
$pdf->SetXY(50,95);	
$pdf->Cell(60, 5, $row['tipo_vacante'], 1, 0, 'L');
$x=$pdf->GETX();
$pdf->SetFont('Arial','B',10);
$pdf->SetX($x+50);
$pdf->Cell(30, 5, $row['ubicacion'], 1,0, 'R');

$pdf->SetFont('Arial','B',8);
$pdf->SetXY(50,105);	
$pdf->Cell(60, 5, $row['autorizacion'], 1, 0, 'L');

$x=$pdf->GETX();
$pdf->SetX($x+45);
$pdf->Cell(35, 5, $row['aprobacion'], 1,0, 'R');


$pdf->SetFont('Arial','B',10);

$pdf->SetXY(50,130);	
$pdf->Cell(50, 5, $row['estudios'], 1, 0, 'L');
$x=$pdf->GETX();
$pdf->SetX($x+50);
$pdf->Cell(30, 5, $row['sexo'], 1,0, 'R');


$pdf->SetXY(50,140);	
$pdf->Cell(8, 5, $row['edad'], 1, 0, 'L');
$x=$pdf->GETX();
$pdf->SetXY(70,140);	
$pdf->Cell(8, 5, $row['edad2'], 1, 0, 'L');
$x=$pdf->GETX();
$pdf->SetX($x+72);
$pdf->Cell(30, 5, $row['civil'], 1,0, 'R');

$pdf->SetFont('Arial','B',8);
$pdf->SetXY(60,160);	
$pdf->MultiCell(0, 5, $row['experiencia'], 1, 'L',0);

$pdf->SetXY(60,180);	
$pdf->MultiCell(0, 5, $row['conocimientos'], 1, 'L',0);

$pdf->SetXY(60,200);	
$pdf->MultiCell(0, 5, $row['habilidades'], 1, 'L',0);

$pdf->SetXY(60,220);	
$pdf->MultiCell(0, 5, $row['competencias'], 1, 'L',0);

$pdf->SetXY(60,240);	
$pdf->MultiCell(0, 5, $row['adicionales'],  1, 'L',0);
$nombre=$row['Nombre'].' '.$row['fecha_solicitud'];
}	
$pdf->Output('F','C:\Users\javier\Desktop\Nueva carpeta/Requisicion '.$nombre.'.pdf');
$pdf->Output();
?>