<?php
// Crear dos variables
$numeroFloat = 10.5;
$numeroInt = 5;

// Realizar operaciones y almacenar resultados en nuevas variables
$suma = $numeroFloat + $numeroInt;
$resta = $numeroFloat - $numeroInt;
$division = $numeroFloat / $numeroInt;
$producto = $numeroFloat * $numeroInt;
$potencia = pow($numeroFloat, $numeroInt);

// Mostrar los resultados utilizando var_dump()
echo "Resultado de la suma: ";
var_dump($suma);

echo "Resultado de la resta: ";
var_dump($resta);

echo "Resultado de la división: ";
var_dump($division);

echo "Resultado del producto: ";
var_dump($producto);

echo "Resultado de la potencia: ";
var_dump($potencia);
?>
