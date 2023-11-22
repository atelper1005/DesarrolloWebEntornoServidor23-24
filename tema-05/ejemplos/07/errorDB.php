<?php

echo "error BASE DE DATOS: ";
echo "<BR>";
echo "Mensaje: " . $e->getMessage() . '<BR>';
echo "Codigo: " . $e->getCode() . '<BR>';
echo "Archivo: " . $e->getFile() . '<BR>';
echo "Linea: " . $e->getLine();
echo "Trace: " . $e->getTraceAsString() . '<BR>';

?>