<?php

    /*

        model.create.PHP

        - Añade un elemento a la tabla 

    */

    $paises = getPaises();

    $generos = getGeneros();

    $peliculas = getPeliculas();


  

    $id = generarId($peliculas);
    $titulo = $_POST['titulo'];
    $pais = $_POST['pais'];
    $director = $_POST['director'];
    $generosPeli = $_POST['generos'];
    $año = $_POST['año'];

    //  Creamos un array nuevo, cuyos valores serán los enviados por el formulario
    $nueva_pelicula = [
        'id' => $id,
        'titulo'=> $titulo,
        'pais'=> $pais,
        'director' => $director,
        'generos'=> $generosPeli,
        'año'=> $año
    ];

    // Añadimos la película al array principal de películas
    $peliculas[] = $nueva_pelicula;

?>