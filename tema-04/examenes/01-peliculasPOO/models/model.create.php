<?php

    /*

        model.create.PHP

        - Añade un elemento a la tabla 

    */

    // Carga de categorias y marcas
    $pais = ArrayPeliculas::getPais();
    $generos = ArrayPeliculas::getGeneros();

   // Cargamos el array de objetos con articulos
    $peliculas = new ArrayPeliculas();
    $peliculas->getPeliculas();


    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $pais = $_POST['pais'];
    $director = $_POST['director'];
    $generosPeli = $_POST['generos'];
    $ano = $_POST['año'];

    //  Creamos un array nuevo, cuyos valores serán los enviados por el formulario
    $pelicula = new Pelicula(
        $id,
        $titulo,
        $pais,
        $director,
        $generosPeli,
        $año
    );

    // Añadimos el nuevo alumno(objeto) usando la funcion create
   $peliculas->create($pelicula);

?>