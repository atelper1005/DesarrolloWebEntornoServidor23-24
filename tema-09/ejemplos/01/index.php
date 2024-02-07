<?php

/*

    Ejemplo 1 - Formato general para creación página PDF

*/

//Exportar clase fpdf
require('fpdf/fpdf.php');

//Creamos objeto FPDF
$pdf=new FPDF();

//Añadimos pagina
$pdf->AddPage();

//Establecemos tipo de letra
$pdf->SetFont('Arial','B',16);

//Creamos la primera celda con convert_encoding
$pdf->Cell(40,10,mb_convert_encoding('¡Hola mundo FPDF!', 'ISO-8859-1', 'UTF-8'));

//Cerramos pdf
$pdf->Output();


