<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    //$this->Image('logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(80,18,'Reportes de Estudiantes',0 ,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10, utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'conexionv.php';
$consulta = "SELECT * FROM estudiante";
$resultado = $mysqli->query($consulta);



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);
$pdf->Cell(70, 10, 'Identificacion', 1, 0, 'C', 0);
$pdf->Cell(60, 10, 'Nombres', 1, 0, 'C', 0);
$pdf->Cell(60, 10, 'celular', 1, 1, 'C', 0);

while($row = $resultado->fetch_assoc()){
    $pdf->Cell(70, 10, $row['Identificacion'], 1, 0, 'C', 0);
    $pdf->Cell(60, 10, $row['Nombres'], 1, 0, 'C', 0);
    $pdf->Cell(60, 10, $row['celular'], 1, 1, 'C', 0);

}
$pdf->Output();
?>