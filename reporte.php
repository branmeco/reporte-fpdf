<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{
    public function header()
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Image('img/carlos_ramon.png', 5, 5, 20, 20, 'png');
        $this->Cell(0, 5, 'INSTITUCION EDICATIVA CARLOS RAMON REPIZO', 0, 0, 'C');
        $this->Image('img/Escudo_del_Huila.svg.png', 250, 5, 20, 20, 'png');
        $this->Ln(3);
        $this->SetFont('Helvetica', '', 7);
        $this->Cell(0, 5, utf8_decode('SAN AGUSTÍN - HUILA'), 0, 0, 'C');
        $this->Ln(3);
        $this->Cell(0, 5, utf8_decode('Sede: Carlos Ramón Repizo Cabrera, San Martín, Siloé, Matanzas, El Playón, La Florida, Timanco, La Cuchilla, La Chaquira, Luis Carlos Galán, Purutal, Aguada'), 0, 0, 'C');
        $this->Ln(3);
        $this->Cell(0, 5, utf8_decode('Reconocimiento Oficial Res. N° 2902 del 04 de abril de 2018'), 0, 0, 'C');
        $this->Ln(3);
        $this->Cell(0, 5, utf8_decode('DANE: 141668000552 Nit: 813.013.763-7'), 0, 0, 'C');
        $this->SetFont('Arial', 'B', 10);
        $this->Ln(10);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(0, 5, 'REGISTRO ESCOLAR DE VALORACIONES 2021', 0, 0, 'C');
    }
    public function footer()
    {
        $this->SetFont('Arial', 'B', 10);
        $this->SetY(-45);
        $this->Cell(45, 5, 'ESCALA NACIONAL', 1, 0, 'L', 0);
        $this->Ln();
        $this->Cell(45, 5, '4.60 - 5.00 = Superior', 1, 0, 'L', 0);
        $this->Ln();
        $this->Cell(45, 5, '4.00 - 4.50 = Alto', 1, 0, 'L', 0);
        $this->Ln();
        $this->Cell(45, 5, '3.00 - 3.90 = Basico', 1, 0, 'L', 0);
        $this->Ln();
        $this->Cell(45, 5, '1.00 - 2.90 = Bajo', 1, 0, 'L', 0);


        $this->SetFont('Arial', 'B', 10);
        $this->SetXY(90, -35);
        $this->Cell(55, 5, 'EDITH MARIA CERPA JIMENEZ', 0, 0, 'C', 0);
        $this->Ln();
        $this->SetFont('Arial', '', 10);
        $this->SetXY(90, -30);
        $this->Cell(55, 5, 'RECTOR(A)', 0, 0, 'C', 0);

        $this->SetFont('Arial', 'B', 10);
        $this->SetXY(180, -35);
        $this->Cell(75, 5, 'JACQUELINE MONTAÑEZ BOHORQUEZ', 0, 0, 'C', 0);
        $this->Ln();
        $this->SetFont('Arial', '', 10);
        $this->SetXY(180, -30);
        $this->Cell(75, 5, 'SECRETARÍA ACADEMICA', 0, 0, 'C', 0);
        $this->Ln();
    }
}

$pdf->SetFillColor(233, 229, 235);
$pdf->SetDrawColor(181, 14, 246);
$pdf->Ln(0.5);

for ($i = 1; $i <= 5; $i++) {
    $pdf->setX(15);
    $pdf->Cell(10, 8, $i, 1, 0, 'C', 0);
    $pdf->Cell(60, 8, 'Leche', 1, 0, 'C', 0);
    $pdf->Cell(30, 8, '$' . '20', 1, 0, 'C', 0);
    $pdf->Cell(35, 8, $i, 1, 0, 'C', 0);
    $pdf->Cell(50, 8, '40', 1, 0, 'C', 0);
}

$pdf->$pdf->Output();
