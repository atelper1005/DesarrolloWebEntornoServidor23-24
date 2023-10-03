<?php
// intVal

$var = "123"; // Asigna un valor de cualquier tipo

$intVal = intval($var); // Convierte la variable a int
$boolVal = boolval($var); // Convierte la variable a bool
$stringVal = strval($var); // Convierte la variable a string
$floatVal = floatval($var); // Convierte la variable a float

echo "Valor como int: " . $intVal . "\n";
echo "<BR>";
echo "Valor como bool: " . ($boolVal ? 'true' : 'false') . "\n";
echo "<BR>";
echo "Valor como string: " . $stringVal . "\n";
echo "<BR>";
echo "Valor como float: " . $floatVal . "\n";
?>
