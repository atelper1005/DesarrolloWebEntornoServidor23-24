<?php
    /*
    
        Modelo: model.ordenar.php
        Descripción: muestra un elemento de la tabla a partir de un criterio

        Método GET:
                    -criterio: titulo, autor, genero, precio
    
    */

    #Genero la tabla
    $libros = generar_tabla();

    # Cargo el criterio de ordenación
    $criterio = $_GET['criterio'];

    //Validar criterio tambien puede ir aquí

    # Ordenar tabla libros

    // Cargar en un array todos los valores del criterio de ordenacion
    $aux = array_column($libros, $criterio);

    //Validar criterio
    if (!in_array($criterio, array_keys($libros[0]))) {
        echo "ERROR! Criterio de ordenación inexistente";
        exit();
    }

    // Funcion array multisort
    array_multisort($aux, SORT_ASC, $libros);


?>