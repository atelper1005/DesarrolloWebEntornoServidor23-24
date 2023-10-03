<?php
// Ejercicio 2: is_null()

// Valores verdaderos
$value1 = null;
$value2 = NULL;
$value3 = null;

// Valores falsos
$value4 = 0;
$value5 = "";
$value6 = false;

echo "Resultado de is_null(\$value1): " . (is_null($value1) ? "true" : "false") . "\n";
echo "<BR>";
echo "Resultado de is_null(\$value2): " . (is_null($value2) ? "true" : "false") . "\n";
echo "<BR>";
echo "Resultado de is_null(\$value3): " . (is_null($value3) ? "true" : "false") . "\n";
echo "<BR>";
echo "Resultado de is_null(\$value4): " . (is_null($value4) ? "true" : "false") . "\n";
echo "<BR>";
echo "Resultado de is_null(\$value5): " . (is_null($value5) ? "true" : "false") . "\n";
echo "<BR>";
echo "Resultado de is_null(\$value6): " . (is_null($value6) ? "true" : "false") . "\n";
?>
