<?php
    /*
    
        Modelo: model.edita.php
        Descripción: edita un elemento de la tabla

        Método GET:
                    -id del libro que quiero editar
    
    */

    #Genero la tabla
    $libros = generar_tabla();

    $id = $_GET['id'];

    $indice_editar = buscar_en_tabla($libros, 'id', $id);

    //comparacion estricta para distinguir el false del 0
    if ($indice_editar !== false) {
        //obtengo el array del elemento a editar
        $libro = $libros[$indice_editar];

    } else {
        echo 'ERROR: libro no encontrado';
        exit();
    }

?>