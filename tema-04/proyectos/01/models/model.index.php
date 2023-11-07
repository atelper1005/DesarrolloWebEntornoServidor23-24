<?php

    /*
    
        Modelo: model.index.php

        Descripción: Carga las tablas generadas
    
    */

    setlocale(LC_MONETARY, "es_ES");

    $categorias = generar_tabla_categorias();

    $articulos = generar_tabla_articulos();

    $marcas = generar_tabla_marcas();
?>