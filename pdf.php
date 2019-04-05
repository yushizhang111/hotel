<?php
session_start();
require("fpdf/fpdf.php");
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Ln(20);
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Registration Information',0,1,'C');
    $this->Ln(1);
    $this->Cell(80);
    $this->Cell(30,10,'Welcome to MYHOTEL^_^',0,1,'C');
    $this->Ln(10);
    // Table headings
    $this->Cell(10,10,'#',1,0,'C');
    $this->Cell(90,10,'Title',1,0,'C');
    $this->Cell(90,10,'Information',1,1,'C');
    // Line break
    
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
// row
$pdf->Cell(10,10,'1',0,0,'C');
$pdf->Cell(90,10,'NAME',0,0,'C');
$pdf->Cell(90,10,$_SESSION["name"],0,1,'C');
// row
$pdf->Cell(10,10,'2',0,0,'C');
$pdf->Cell(90,10,'EMAIL ADDRESS',0,0,'C');
$pdf->Cell(90,10,$_SESSION["email_address"],0,1,'C');
// About
$pdf->SetFont('Arial','B',15);
$pdf->Cell(180,20,'About Us',0,1,'C');
$pdf->SetFont('Times','',12);
$pdf->Cell(180,20,'A hotel is an establishment that provides paid lodging on a short-term basis. ',0,1,'C');
$pdf->Cell(180,20,'Facilities provided may range from a modest-quality mattress in a small room to large suites with bigger, ',0,1,'C');
$pdf->Cell(180,20,'higher-quality beds, a dresser, a refrigerator and other kitchen facilities, upholstered chairs, ',0,1,'C');
$pdf->Cell(180,20,'a flat screen television and en-suite bathrooms. Small, ',0,1,'C');
$pdf->Cell(180,20,'lower-priced hotels may offer only the most basic guest services and facilities. ',0,1,'C');

$pdf->Output();
?>