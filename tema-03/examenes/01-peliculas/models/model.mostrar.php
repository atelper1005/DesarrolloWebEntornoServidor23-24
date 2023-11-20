<?php

    /*

        Modelo: model.mostrar.PHP

        - Carga los datos
        - Recibo por GET indice de la película que se desea mostrar

    */

   
    #Genero la tabla
    $peliculas = getPeliculas();

    #Cargamos los generos
    $generos = getGeneros();

    #Cargamos los paises
    $paises = getPaises();

    $idPelicula = $_GET['id'];  

     // Usando la función buscarEnTabla(), comprobaremos si existe dicho elemento
     $indiceBuscar = buscarEnTabla($peliculas,'id',$idPelicula);

     // Condicional creado para controlar si existe o no un elemento.
    if($indiceBuscar !== false){ // Usaremos comparación de tipo "no identico", para evitar problemas con el primer indice
     $pelicula = $peliculas[$indiceBuscar];
    } else {
     echo "Película no encontrada";
     exit();
    }

?>