<?php
    /*
    
        Modelo: model.buscar.php
        Descripción: filtra los elementos a partir de la expresion de busqueda

        Método GET:
                    -expresion: prompt o expresion de busqueda
    
    */

    // Cargar las categorías y crear un Array de Artículos
$categorias = ArrayArticulos::getCategorias();
$marcas = ArrayArticulos::getMarcas();

$articulos = new ArrayArticulos();
$articulos->getDatos();

// Cargo la expresion de búsqueda
$expresion = $_GET['expresion'];

// Filtrar la tabla  a partir de esa expresión
$articulos  = filtrar($articulos, $expresion);

?>