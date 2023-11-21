<?php

    /*
        fichero: model.index.php
        Descripción: modelo del proceso index.php

    */

     // Carga de categorias y marcas
     $pais = ArrayPeliculas::getPais();
     $generos = ArrayPeliculas::getGeneros();
 
    // Cargamos el array de objetos con articulos
     $peliculas = new ArrayPeliculas();
     $peliculas->getPeliculas();
    
?>