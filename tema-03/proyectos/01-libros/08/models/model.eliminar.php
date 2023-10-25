<<<<<<< HEAD
<?php
    /*
    
        Modelo: model.eliminar.php
        Descripción: elimina un elemento de la tabla

        Método GET:
                    -id del libro que quiero eliminar
    
    */

    #Genero la tabla
    $libros = generar_tabla();

    $id = $_GET['id'];

    $indice_eliminar = buscar_en_tabla($libros, 'id', $id);

    //comparacion estricta para distinguir el false del 0
    if ($indice_eliminar !== false) {
        //elimino el libro seleccionado
        unset($libros[$indice_eliminar]);

        //reconstruyo el array
        $libros = array_values($libros);
    } else {
        echo 'ERROR: libro no encontrado';
        exit();
    }

=======
<?php
    /*
    
        Modelo: model.eliminar.php
        Descripción: elimina un elemento de la tabla

        Método GET:
                    -id del libro que quiero eliminar
    
    */

    #Genero la tabla
    $libros = generar_tabla();

    $id = $_GET['id'];

    $indice_eliminar = buscar_en_tabla($libros, 'id', $id);

    //comparacion estricta para distinguir el false del 0
    if ($indice_eliminar !== false) {
        //elimino el libro seleccionado
        unset($libros[$indice_eliminar]);

        //reconstruyo el array
        $libros = array_values($libros);
    } else {
        echo 'ERROR: libro no encontrado';
        exit();
    }

>>>>>>> 1b65408621ed418d8d6c174feec0dcda1c62ea70
?>