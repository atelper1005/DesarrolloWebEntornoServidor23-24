<?php

/*

    Ejemplo 2 - Formato general para creación página PDF
                con iconv
*/

//Exportar clase fpdf
require('fpdf/fpdf.php');

//Creamos objeto FPDF
$pdf=new FPDF();

//Añadimos pagina
$pdf->AddPage();

//Establecemos tipo de letra
$pdf->SetFont('Arial','B',16);

//Creamos la primera celda con funcion iconv
$pdf->Cell(40,10,iconv('UTF-8', 'ISO-8859-1', '¡Hola mundo 2 FPDF!'));

//Cerramos pdf
$pdf->Output();

