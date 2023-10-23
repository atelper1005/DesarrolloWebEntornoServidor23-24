<?php
    /*
    
        Modelo: model.mostrar.php
        Descripción: muestra un elemento de la tabla

        Método GET:
                    -id del libro que quiero editar
    
    */

    $id = $_GET['id'];

    $indice_mostrar = buscar_en_tabla($libros, 'id', $id);

    //comparacion estricta para distinguir el false del 0
    if ($indice_mostrar !== false) {
        //obtengo el array del elemento a editar
        $libro = $libros[$indice_mostrar];

    } else {
        echo 'ERROR: libro no encontrado';
        exit();
    }

?>