<?php

    /*

        model.create.PHP

        - Añade un elemento a la tabla 

    */

    $paises = getPaises();

    $generos = getGeneros();

    $peliculas = getPeliculas();


  

    
    $titulo = $_POST['titulo'];
    $pais = $_POST['pais'];
    $director = $_POST['director'];
    $generos = $_POST['generos'];
    $año = $_POST['año'];

    
    $nueva_pelicula = [
        'id' => $id,
        'titulo'=> $titulo,
        'pais'=> $paises,
        'director' => $director,
        'generos'=> $_POST('generos'),
        'año'=> $año
    ];

    
    $peliculas = nuevo($peliculas, $nueva_pelicula);

?>