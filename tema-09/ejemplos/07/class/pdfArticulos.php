<?php 

class PdfArticulos extends FPDF {
    public function Header() {
        //logo
        $this->image('logo/logotipo.png', 10, 5, 20);

        //Letra
        $this->SetFont('Arial', 'B', 10);

        //Subraya la cabecera
        $this->Cell(0, 10, 'Nutrininja', 'B', 1, 'R');

        //salto de linea de 5mm
        $this->ln(5);
    }

    public function Footer() {
        $this->SetY(-10);
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 'T', 0, 'C');
    }

    public function Titulo() {
        $this->SetFont('Courier', 'B', 12);
        $this->setFillColor(240);
        $this->Cell(0, 10, iconv('UTF-8', 'ISO-8859-1', 'Listado de Ejercicios'), 0, 0, 'C', true);
        $this->ln(15);
    }

    public function Cabecera() {
        $this->SetFont('Courier', 'B', 10);
        $this->setFillColor(240);
        $this->Cell(10, 7, iconv('UTF-8', 'ISO-8859-1', 'Id'), 'B', 0, 'R', true);
        $this->Cell(50, 7, iconv('UTF-8', 'ISO-8859-1', 'Descripción'), 'B', 0, 'L', true);
        $this->Cell(50, 7, iconv('UTF-8', 'ISO-8859-1', 'Calorías quemadas'), 'B', 0, 'L', true);
        $this->Cell(40, 7, iconv('UTF-8', 'ISO-8859-1', 'Categoría'), 'B', 0, 'L', true);
        $this->Cell(40, 7, iconv('UTF-8', 'ISO-8859-1', 'Etiquetas'), 'B', 0, 'L', true);
        $this->ln(7.2);
    }
}