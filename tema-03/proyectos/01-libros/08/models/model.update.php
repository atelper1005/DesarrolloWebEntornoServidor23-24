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

        Método GET:
                    -id
    
    */

    #Genero la tabla
    $libros = generar_tabla();

    #extreaemos en variables los valores del formulario

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $precio = $_POST['precio'];

    #obtener el indice del libro que quiero editar

    $id_editar = $_GET['id'];

    #obtener el indice del libro

    $indice_libro_editar = buscar_en_tabla($libros, 'id', $id_editar);

    #creo un array asociativo con los detalles del nuevo libro/elemento

    $libro = [
        'id' => $id,
        'titulo'=> $titulo,
        'autor'=> $autor,
        'genero'=> $genero,
        'precio' => $precio
    ];

    #actualizo la tabla libros

    $libros[$indice_libro_editar] = $libro;

?>