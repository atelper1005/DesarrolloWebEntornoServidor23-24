<?php
    /*
    
        Modelo: model.buscar.php
        Descripción: filtra los elementos a partir de la expresion de busqueda

        Método GET:
                    -expresion: prompt o expresion de busqueda
    
    */

    #Genero la tabla
    $articulos = generar_tabla_articulos();

    #Cargamos las categorias
    $categorias = generar_tabla_categorias();

    # Cargo la expresion
    $expresion = $_GET['expresion'];

    $articulos = buscar($articulos, $expresion);

?>