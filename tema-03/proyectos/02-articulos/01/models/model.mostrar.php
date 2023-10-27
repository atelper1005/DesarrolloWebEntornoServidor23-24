<?php
    /*
    
        Modelo: model.mostrar.php
        Descripción: muestra un elemento de la tabla

        Método GET:
                    -id del libro que quiero editar
    
    */

    #Genero la tabla
    $articulos = generar_tabla_articulos();

    #Cargamos las categorias
    $categorias = generar_tabla_categorias();

    $id = $_GET['id'];

    $indice_mostrar = buscar_en_tabla($articulos, 'id', $id);

    //comparacion estricta para distinguir el false del 0
    if ($indice_mostrar !== false) {
        //obtengo el array del elemento a mostrar
        $articulo = $articulos[$indice_mostrar];

    } else {
        echo 'ERROR: artículo no encontrado';
        exit();
    }

?>