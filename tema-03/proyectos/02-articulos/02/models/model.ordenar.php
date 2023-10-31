<?php

/*

    Modelo: model.ordenar.php
    Descripción: muestra un elemento de la tabla a partir de un criterio

    Método GET:
                -criterio: titulo, autor, genero, precio

*/

#Genero la tabla
$articulos = generar_tabla_articulos();

#Cargamos las categorias
$categorias = generar_tabla_categorias();

#Cargamos las marcas
$marcas = generar_tabla_marcas();

# Cargo el criterio de ordenación
$criterio = $_GET['criterio'];

//Validar criterio tambien puede ir aquí

# Ordenar tabla libros

// Invocamos la función que se encargará de ordenar el contenido de la vista
$articulos = ordenar($articulos, $criterio);

?>