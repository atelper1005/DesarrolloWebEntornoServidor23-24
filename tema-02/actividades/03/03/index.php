<?php
// Ejercicio 3: isset()

// Valores verdaderos
$value1 = 10;
$value2 = "Hello";
$value3 = true;

// Valores falsos
$value4 = null;
$value5 = "";
$value6 = false;

echo "Resultado de isset(\$value1): " . (isset($value1) ? "true" : "false") . "\n";
echo "<BR>";
echo "Resultado de isset(\$value2): " . (isset($value2) ? "true" : "false") . "\n";
echo "<BR>";
echo "Resultado de isset(\$value3): " . (isset($value3) ? "true" : "false") . "\n";
echo "<BR>";
echo "Resultado de isset(\$value4): " . (isset($value4) ? "true" : "false") . "\n";
echo "<BR>";
echo "Resultado de isset(\$value5): " . (isset($value5) ? "true" : "false") . "\n";
echo "<BR>";
echo "Resultado de isset(\$value6): " . (isset($value6) ? "true" : "false") . "\n";
?>
