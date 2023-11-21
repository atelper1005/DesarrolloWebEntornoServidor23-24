<?php

    /*

        Modelo: model.mostrar.PHP

        - Carga los datos
        - Recibo por GET indice de la película que se desea mostrar

    */

   
     // Carga de categorias y marcas
     $pais = ArrayPeliculas::getPais();
     $generos = ArrayPeliculas::getGeneros();
 
    // Cargamos el array de objetos con articulos
     $peliculas = new ArrayPeliculas();
     $peliculas->getPeliculas();

    $idPelicula = $_GET['id'];  

    $pelicula = $peliculas->read($idPelicula);

?>