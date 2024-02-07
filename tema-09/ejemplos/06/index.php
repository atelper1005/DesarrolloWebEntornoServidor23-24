<?php

/*

    Ejemplo 6 - Mostrar imagen en pdf

*/

//Exportar clase fpdf
require('fpdf/fpdf.php');

//Creamos objeto FPDF
$pdf=new FPDF();

//Establecemos fuente
$pdf->SetFont("Times","",10);

//Añadimos pagina
$pdf->AddPage();

//Establecemos la imagen
$pdf->Image('logo/logotipo.png', 10, 5, 100);

//Cerramos pdf
$pdf->Output();

