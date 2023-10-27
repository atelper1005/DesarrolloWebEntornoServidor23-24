<?php
    /*
    
        Modelo: model.eliminar.php
        Descripción: elimina un elemento de la tabla

        Método GET:
                    -id del libro que quiero eliminar
    
    */

    #Genero la tabla
    $articulos = generar_tabla_articulos();

    #Cargamos las categorias
    $categorias = generar_tabla_categorias();

    $id = $_GET['id'];

    //invocamos la funcion eliminar
    $articulos = eliminar($articulos, $id);
?>