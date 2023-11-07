<?php 

include("class/class.calculadora.php");

// Ejemplo de uso:
$calculadora = new Calculadora();
$calculadora->setValor1(5);
$calculadora->setValor2(3);

$calculadora->suma();
echo "Resultado de la suma: " . $calculadora->getResultado() . "\n";

$calculadora->resta();
echo "Resultado de la resta: " . $calculadora->getResultado() . "\n";

$calculadora->multiplicacion();
echo "Resultado de la multiplicación: " . $calculadora->getResultado() . "\n";

$calculadora->division();
echo "Resultado de la división: " . $calculadora->getResultado() . "\n";

$calculadora->potencia();
echo "Resultado de la potencia: " . $calculadora->getResultado() . "\n";

?>