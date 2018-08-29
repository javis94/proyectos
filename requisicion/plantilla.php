<?php

require 'fpdf/fpdf.php';

class PDF extends FPDF {
	function Header() {
		
		$this->SetFont('Arial','B', 14);
		$this->Image('images/team.png',8,8,-350);
		$this->SetFont('Arial','B',12);
		$this->Cell(155,17,'REQUISICION DE PERSONAL',1,0,'C');
		$this->SetFont('Arial','B', 12);
		$this->Cell(40,17,'',1,0,'C');
		$this->Text(169, 15, 'MO-REH-FO-004');
		$this->Text(176, 24, 'Version 2');
	}
	function Footer() {
		$this->SetY(-15);
		$this->SetFont('Arial','I',10);
	}
}
?>
