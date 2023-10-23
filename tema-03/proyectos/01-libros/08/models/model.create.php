<?php
    /*
    
        Modelo: model.create.php
        Descripción: añade un nuevo elemento a la tabla

        Método POST:
                    -id del libro que quiero eliminar
                    -titulo
                    -autor
                    -genero
                    -precio
    
    */

    #Genero la tabla
    $libros = generar_tabla();

    #extreaemos en variables los valores del formulario

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $precio = $_POST['precio'];

    #creo un array asociativo con los detalles del nuevo libro/elemento

    $libro = [
        'id' => $id,
        'titulo'=> $titulo,
        'autor'=> $autor,
        'genero'=> $genero,
        'precio' => $precio
    ];

    #Añado un nuevo elemento a la tabla

    array_push($libros, $libro);
    //$libros[] = $libro;

?>