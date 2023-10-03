<?php
// Carpeta: version3

$var = "123"; // Asigna un valor de cualquier tipo

$intVal = (int) $var; // Convierte la variable a int
$boolVal = (bool) $var; // Convierte la variable a bool
$stringVal = (string) $var; // Convierte la variable a string
$floatVal = (float) $var; // Convierte la variable a float

echo "Valor como int: " . $intVal . "\n";
echo "<BR>";
echo "Valor como bool: " . ($boolVal ? 'true' : 'false') . "\n";
echo "<BR>";
echo "Valor como string: " . $stringVal . "\n";
echo "<BR>";
echo "Valor como float: " . $floatVal . "\n";
?>
