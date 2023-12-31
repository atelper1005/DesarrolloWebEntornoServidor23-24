<?php
    /*
    
        Modelo: model.buscar.php
        Descripción: filtra los elementos a partir de la expresion de busqueda

        Método GET:
                    -expresion: prompt o expresion de busqueda
    
    */

    #Genero la tabla
    $libros = generar_tabla();

    # Cargo la expresion
    $expresion = $_GET['expresion'];

    // Creamos un array vacio donde se cargaran las filas que cumplan con la expresion
    $aux = [];

    foreach($libros as $libro) {
        if(array_search($expresion, $libro, false)) {
            $aux[] = $libro;
        }
    }

    #Validar la busqueda
    if(!empty($aux)) {
        $libro = $aux;
    } 

?>