<?php

/*

    Modelo: model.ordenar.php
    Descripción: muestra un elemento de la tabla a partir de un criterio

    Método GET:
                -criterio: titulo, autor, genero, precio

*/

// Cargar las categorías y crear un Array de Artículos
$categorias = ArrayArticulos::getCategorias();
$marcas = ArrayArticulos::getMarcas();

$articulos = new ArrayArticulos();
$articulos->getDatos();

// Cargar el criterio de ordenación
$criterio = $_GET['criterio'];

// Ordena los artículos
$articulos->ordenarArticulos($criterio);

// Ahora, $articulos->tabla contiene los artículos ordenados
$articulosOrdenados = $articulos->getTabla();

?>