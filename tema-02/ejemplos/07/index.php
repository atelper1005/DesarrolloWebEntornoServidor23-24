<?php

/* Archivo: index.php
Descripción: Controlador ejemplo
Autor: Antonio
Fecha: 26/09/2023 */

$alumno = "Antonio";

echo "El alumno es: ";
print "<br>";
echo "$alumno";

echo "<br>";

echo 123.45;
print "<br>";
print 187.46;

// echo como print son funciones, la sintáxis de PHP admite el no uso de ()

// echo puede imprimir más de un argumento/varias cadenas, print NO puede más de 1
print "<br>";
echo "Mi nombre es ", "Antonio";

print "<br>";
//print "Mi nombre es ", "Antonio"; ----- Da error

//tanto print como echo se pueden concatenar con punto
print "Mi nombre es "."Antonio";
?>