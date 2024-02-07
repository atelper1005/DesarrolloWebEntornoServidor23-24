<?php

/*

    Ejemplo 6 - Mostrar imagen en pdf

*/

//Exportar clase fpdf
require('fpdf/fpdf.php');
require('class/pdfArticulos.php');
require('datos/articulos.php');

//Creamos objeto FPDF
$pdf=new PdfArticulos();

$pdf->AliasNbPages();

//Establecemos fuente
$pdf->SetFont("Courier","",10);

//Añadimos pagina
$pdf->AddPage();

//Muestro el titulo
$pdf->Titulo();

//Muestro cabecera del listado
$pdf->Cabecera();

//Muestro los detalles de articulos
foreach ($articulos as $articulo) {
    $pdf->Cell(10, 7, iconv('UTF-8', 'ISO-8859-1', $articulo['id']), 'B', 0, 'R', true);
    $pdf->Cell(50, 7, iconv('UTF-8', 'ISO-8859-1', $articulo['descripcion']), 'B', 0, 'L', true);
    $pdf->Cell(50, 7, iconv('UTF-8', 'ISO-8859-1', $articulo['calorias_quemadas']), 'B', 0, 'L', true);
    $pdf->Cell(40, 7, iconv('UTF-8', 'ISO-8859-1', $articulo['categoria']), 'B', 0, 'L', true);
    $pdf->Cell(40, 7, iconv('UTF-8', 'ISO-8859-1', implode(', ', $articulo['etiquetas'])), 'B', 0, 'L', true);
    $pdf->ln(7.2);
}

//Cerramos pdf
$pdf->Output();

