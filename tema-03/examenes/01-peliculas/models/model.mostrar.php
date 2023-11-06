<?php

    /*

        Modelo: model.mostrar.PHP

        - Carga los datos
        - Recibo por GET indice de la película que se desea mostrar

    */

   
    #Genero la tabla
    $tabla = getPeliculas();

    #Cargamos los generos
    $generos = getGeneros();

    #Cargamos los paises
    $paises = getPaises();

    $id = $_GET['id'];  

    

?>