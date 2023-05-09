<?php



require_once "../../Model/staff/survey.php";
require_once "../../Controller/staff/surveyHandler.php";
require_once"Pdf/fpdf.php";
$handler =new Surveyhandler();
	
ob_end_clean();


// Instantiate and use the FPDF class
$pdf = new FPDF();

//Add a new page
$pdf->AddPage();

// Set the font for the text
$pdf->SetFont('Arial', 'B', 18);

$count=$handler->get_number();
// Prints a cell with given text
$pdf-> SetTitle("AMs",);
$pdf->Cell(60,20,'Number of survey responce');
$pdf->Cell(60,20,"");
$pdf->Cell(60,20,$count);



// return the generated output
$pdf->Output();



?>
