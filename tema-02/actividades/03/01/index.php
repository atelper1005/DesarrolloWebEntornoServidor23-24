<?php
// Ejercicio 1: Conversiones de datos en expresiones

// Multiplicar valor entero con una cadena que contiene un número inicial
$intVal = 5;
$strVal = "10";
$result = $intVal * $strVal;
echo "Resultado de la multiplicación: " . $result . "\n";

echo "<BR>";

echo "Tipo de dato del resultado: " . gettype($result) . "\n";

echo "<BR>";

// Sumar valor entero con cadena con número inicial
$intVal = 10;
$strVal = "20";
$result = $intVal + $strVal;

echo "Resultado de la suma: " . $result . "\n";

echo "<BR>";

echo "Tipo de dato del resultado: " . gettype($result) . "\n";

echo "<BR>";

// Sumar valor entero con valor float
$intVal = 15;
$floatVal = 3.14;
$result = $intVal + $floatVal;

echo "Resultado de la suma: " . $result . "\n";

echo "<BR>";

echo "Tipo de dato del resultado: " . gettype($result) . "\n";

echo "<BR>";

// Concatenar valor entero con cadena
$intVal = 20;
$strVal = "30";
$result = $intVal . $strVal;

echo "Resultado de la concatenación: " . $result . "\n";

echo "<BR>";

echo "Tipo de dato del resultado: " . gettype($result) . "\n";

echo "<BR>";

// Sumar valor entero con valor booleano
$intVal = 25;
$boolVal = true;
$result = $intVal + $boolVal;

echo "Resultado de la suma: " . $result . "\n";

echo "<BR>";

echo "Tipo de dato del resultado: " . gettype($result) . "\n";

echo "<BR>";
?>
