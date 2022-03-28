<?php
//AddPage(orientacion(PORTRAIT, LANDSCAPE), tamaño(A3, A4, A5, LETTER, LEGAL)),
//SetFont(tipo[COURIER, HELVETICA, ARIAL, TIMES, SYMBOL, ZAPDINGBATS], estilo[normal, B, I, U], tamaño),
//Cell(ancho, alto, texto, bordes, ?, alineación, rellenar, link),
//Output(destino[I, D, F, S], nombre_archivo, utf8)
require('fpdf/fpdf.php');
$fpdf = new FPDF();

// $fpdf->SetFont('Arial');
// $fpdf->AddPage('LANDSCAPE', 'letter');
// $fpdf->Write(5, 'Pagina #1');
// $fpdf->AddPage('PORTRAIT', 'legal');
// $fpdf->Write(5, 'Pagina #2');
// $fpdf->AddPage('LANDSCAPE', 'A5', 180);
// $fpdf->Write(5, 'Pagina #3');

//--------------------------------------------------------------------------------------------------------
// $fpdf->AddPage('PORTRAIT', 'letter');
// $fpdf->SetFont('Arial', '', 14);
// $fpdf->Cell(75, 5, utf8_decode('Esta linea está en arial tamaño 14'));
// $fpdf->Ln();
// $fpdf->SetFont('Helvetica', 'B', 12);
// $fpdf->Write(5, utf8_decode('Esta linea está en Helvetica, negrita y tamaño 12'));
// $fpdf->SetFont('Courier', 'BI', 12);
// $fpdf->Ln();
// $fpdf->Write(10, utf8_decode('Este texto está en courier, negrita, cursiva y tamaño 12'));
// $fpdf->Ln();

// $fpdf->SetFont('Arial', 'B');
// $fpdf->Write(5, 'Hola ');
// $fpdf->SetFont('Times', 'I');
// $fpdf->Write(5, 'Mundo');

//--------------------------------------------------------------------------------------------------------
// $fpdf->AddPage('PORTRAIT', 'letter');
// $fpdf->SetFont('Arial', 'B', 14);
// $fpdf->Write(5, 'Empleados Registrados en el Portal');
// $fpdf->Ln(10);

// $fpdf->SetFont('Arial', 'B', 10);
// $fpdf->SetFillColor(55, 89, 78);
// $fpdf->Cell(25, 5, 'DUI', 1, 0, 'C', true);
// $fpdf->Cell(50, 5, 'Nombre completo', 1, 0, 'C', false);
// $fpdf->Cell(100, 5, utf8_decode('Direccion'), 1, 1, 'C', false);

// $fpdf->SetFont('Arial', '', 10);
// $fpdf->Ln(1);
// $fpdf->Cell(25, 5, '04355101-3', 1, 0, false);
// $fpdf->Cell(50, 5, 'Pedro de Jesus Moreno', 1, 0, false);
// $fpdf->Cell(100, 5, utf8_decode('El Salvador'), 1, 1, false);

// $fpdf->Close();
// $fpdf->output('I', 'empleados.xlsx');

//--------------------------------------------Encabezado y pie de pagina------------------------------------------------------------
// $fpdf->AddPage('PORTRAIT', 'letter');

// class pdf extends FPDF
// {
//     public function header()
//     {
//         $this->SetFont('courier', 'B', 12);
//         $this->Write(5, 'Centro Educativo Colonia La Paz');
//         $this->SetX(-45);
//         $this->Write(5, 'CodeStack');
//     }
//     public function footer()
//     {
//         $this->SetFont('Courier', 'B', 12);
//         $this->SetY(-15);
//         $this->Write(5, 'San Miguel, El Salvador');
//     }
// }

// $fpdf = new pdf();
// $fpdf->AddPage('PORTRAIT', 'letter');
// $fpdf->SetFont('Arial', 'B', 14);
// $fpdf->SetY(20);
// $fpdf->Cell(0, 5, 'Listado de estudiantes matriculados', 0, 0, 'C');
// $fpdf->AddPage();
// $fpdf->Output();

//--------------------------------------------Imagenes------------------------------------------------------------------------
// $fpdf->AddPage('PORTRAIT', 'letter');

// class pdf extends FPDF
// {
//     public function header()
//     {
//         $this->SetFont('Arial', 'B', 10);
//         $this->Cell(0, 5, 'Centro Educativo Colonia La Paz', 0, 0, 'C');
//         $this->Image('img/logo.png', 190, 5, 20, 20, 'png');
//     }
//     public function footer()
//     {
//         $this->SetFont('Arial', 'B', 10);
//         $this->SetY(-15);
//         $this->Write(5, 'San Miguel, El Salvador');
//         $this->SetX(-35);
//         $this->AliasNbPages('tpagina');
//         $this->Write(5, $this->PageNo() . '/tpagina');
//     }
// }

// $fpdf = new pdf();
// $fpdf->AddPage('PORTRAIT', 'letter');
// $fpdf->SetFont('Arial', 'B', 14);
// $fpdf->SetY(30);
// $fpdf->Cell(0, 5, 'Listado de estudiantes matriculados', 0, 0, 'C');
// $fpdf->AddPage('PORTRAIT', 'letter');
// $fpdf->Image('img/dj.png', 50, 50, 50, 100, 'png', 'http://youtube.com/codestack');
// $fpdf->Output();

//---------------------------------------------Color de texto-----------------------------------------------------------
$fpdf->AddPage('LANDSCAPE', 'LETTER');

class pdf extends FPDF
{
    public function header()
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Image('img/carlos_ramon.png', 20, 10, 20, 20, 'png');
        $this->Cell(0, 5, 'INSTITUCION EDICATIVA CARLOS RAMON REPIZO', 0, 0, 'C');
        $this->Image('img/Escudo_del_Huila.svg.png', 230, 10, 20, 20, 'png');
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
        $this->Ln(10);

        //Enmarcación del recuado
        $this->Cell(248, -35, '', 1, 0, 'C');

        $this->Ln(0.7);
        //Enmarcación del recuado
        $this->Cell(248, 16, '', 1, 0, 'C');
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
        $this->Line(85, 180, 150, 180);
        $this->Cell(55, 5, 'EDITH MARIA CERPA JIMENEZ', 0, 0, 'C', 0);
        $this->Ln();
        $this->SetFont('Arial', '', 10);
        $this->SetXY(90, -30);
        $this->Cell(55, 5, 'RECTOR(A)', 0, 0, 'C', 0);

        $this->SetFont('Arial', 'B', 10);
        $this->SetXY(180, -35);
        $this->Line(175, 180, 260, 180);
        $this->Cell(75, 5, utf8_decode('JACQUELINE MONTAÑEZ BOHORQUEZ'), 0, 0, 'C', 0);
        $this->Ln();
        $this->SetFont('Arial', '', 10);
        $this->SetXY(180, -30);
        $this->Cell(75, 5, utf8_decode('SECRETARÍA ACADEMICA'), 0, 0, 'C', 0);
    }
}

$fpdf = new pdf();

$fpdf->AddPage('LANDSCAPE', 'LETTER');
$fpdf->SetTextColor(0, 0, 0);
$fpdf->Ln(5);
$fpdf->Cell(25, 5, 'Estudiante: ', 0, 0);
$fpdf->SetFont('Arial', '', 10);
$fpdf->Cell(100, 5, utf8_decode('ELIZABETH ARGOTE BOLAÑOS'), 0, 0);
$fpdf->Ln();
$fpdf->setFont('Arial', 'B', 10);
$fpdf->Cell(20, 5, 'Sede: ');
$fpdf->SetFont('Arial', '', 10);
$fpdf->Cell(70, 5, 'CARLOS RAMON REPIZO', 0, 0);
$fpdf->SetFont('Arial', 'B', 10);
$fpdf->Cell(15, 5, 'Grado: ');
$fpdf->SetFont('Arial', '', 10);
$fpdf->Cell(30, 5, 'PRIMERO', 0, 0);

$fpdf->SetFont('Arial', 'B', 10);
$fpdf->Cell(25, -5, utf8_decode('N° Matricula: '), 0, 0);
$fpdf->SetFont('Arial', '', 10);
$fpdf->Cell(20, -5, '2021000250', 0, 0);
$fpdf->Ln();
$fpdf->SetFont('Arial', 'B', 10);
$fpdf->SetX(145);
$fpdf->Cell(20, 15, 'Jornada: ', 0, 0);
$fpdf->SetFont('Arial', '', 10);
$fpdf->Cell(20, 15, 'COMPLETA', 0, 0);

$fpdf->SetFont('Arial', 'B', 10);
$fpdf->SetX(200);
$fpdf->Cell(20, 5, utf8_decode('Folio N°: '), 0, 0);
$fpdf->SetFont('Arial', '', 10);
$fpdf->Cell(20, 5, '000031', 0, 0);
$fpdf->Ln();
$fpdf->SetFont('Arial', 'B', 10);
$fpdf->SetX(200);
$fpdf->Cell(20, 5, 'Fecha: ', 0, 0);
$fpdf->SetFont('Arial', '', 10);
$fpdf->Cell(20, 5, utf8_decode('26/11/2021'));
$fpdf->Ln(7);

//----------------------------------------
//SetFillColor()
//SetDrawColor()

$fpdf->SetFontSize(10);
$fpdf->SetFont('Arial', 'B');
$fpdf->SetFillColor(255, 255, 255);
$fpdf->SetTextColor(60, 60, 60);
$fpdf->SetDrawColor(60, 60, 60);
$fpdf->Cell(40, 5, 'COMPETENCIA', 1, 0, 'C', true);
$fpdf->Cell(20, 5, utf8_decode('DEF. ÁREA'), 1, 0, 'C', true);
$fpdf->Cell(40, 5, 'PENSAMIENTOS', 1, 0, 'C', true);
$fpdf->Cell(8, 5, 'IHS', 1, 0, 'C', true);
$fpdf->Cell(55, 5, utf8_decode('VALORACIONES POR PERÍODO'), 1, 0, 'C', true);
$fpdf->Cell(45, 5, 'DEFINITIVA ASIGNATURA', 1, 0, 'C', true);
$fpdf->Cell(40, 5, 'RECUPERACIONES', 1, 1, 'C', true);
$fpdf->Ln(0.7);

$fpdf->SetFont('Arial', '');
for ($i = 1; $i <= 4; $i++) {
    $fpdf->setX(10);
    $fpdf->Cell(40, 5, 'APRENDIENDO A PENSAR', 1, 0, 'C', 0);
    $fpdf->Cell(20, 5, '0.0', 1, 0, 'C', 0);
    $fpdf->Cell(40, 5, utf8_decode('PENSAMIENTO LÓGICO'), 1, 0, 'C', 0);
    $fpdf->Cell(8, 5, $i, 1, 0, 'C', 0);
    $fpdf->Cell(55, 5, '4.0', 1, 0, 'C', 0);
    $fpdf->Cell(45, 5, '4.8', 1, 0, 'C', 0);
    $fpdf->Cell(40, 5, '', 1, 1, 'C', 0);
}

$fpdf->Ln(0.7);

for ($i = 1; $i <= 4; $i++) {
    $fpdf->setX(10);
    $fpdf->Cell(40, 5, 'APRENDIENDO A COMUNICAR', 1, 0, 'C', 0);
    $fpdf->Cell(20, 5, '0.0', 1, 0, 'C', 0);
    $fpdf->Cell(40, 5, utf8_decode('PENSAMIENTO LOGÍSTICO (LENGUA)'), 1, 0, 'C', 0);
    $fpdf->Cell(8, 5, $i, 1, 0, 'C', 0);
    $fpdf->Cell(55, 5, '4.0', 1, 0, 'C', 0);
    $fpdf->Cell(45, 5, '4.8', 1, 0, 'C', 0);
    $fpdf->Cell(40, 5, '', 1, 1, 'C', 0);
}

$fpdf->Ln(0.7);

for ($i = 1; $i <= 4; $i++) {
    $fpdf->setX(10);
    $fpdf->Cell(40, 5, 'APRENDIENDO EL BUEN VIVIR', 1, 0, 'C', 0);
    $fpdf->Cell(20, 5, '0.0', 1, 0, 'C', 0);
    $fpdf->Cell(40, 5, utf8_decode('PENSAMIENTO SOSTENIBLE (PROYECTO DE'), 1, 0, 'C', 0);
    $fpdf->Cell(8, 5, $i, 1, 0, 'C', 0);
    $fpdf->Cell(55, 5, '4.0', 1, 0, 'C', 0);
    $fpdf->Cell(45, 5, '4.8', 1, 0, 'C', 0);
    $fpdf->Cell(40, 5, '', 1, 1, 'C', 0);
}

$fpdf->Ln(0.7);
$fpdf->Cell(248, 20, '', 1, 0, 'L', 0);
$fpdf->Cell(-208, 5, 'OBSERVACIONES: ', 0, 0, 'R', 0);
$fpdf->SetFont('Arial', 'B');
$fpdf->Cell(80, 5, 'PROMOVIDO(A) AL GRADO SEGUNDO', 0, 0, 'L', 0);

$fpdf->Output();
