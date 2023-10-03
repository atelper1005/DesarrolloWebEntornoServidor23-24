<?php
// Ejercicio 4: empty()

// Valores verdaderos
$value1 = null;
$value2 = "";
$value3 = 0;

// Valores falsos
$value4 = "Hello";
$value5 = 10;
$value6 = true;

echo "Resultado de empty(\$value1): " . (empty($value1) ? "true" : "false") . "\n";
echo "<BR>";
echo "Resultado de empty(\$value2): " . (empty($value2) ? "true" : "false") . "\n";
echo "<BR>";
echo "Resultado de empty(\$value3): " . (empty($value3) ? "true" : "false") . "\n";
echo "<BR>";
echo "Resultado de empty(\$value4): " . (empty($value4) ? "true" : "false") . "\n";
echo "<BR>";
echo "Resultado de empty(\$value5): " . (empty($value5) ? "true" : "false") . "\n";
echo "<BR>";
echo "Resultado de empty(\$value6): " . (empty($value6) ? "true" : "false") . "\n";
?>
