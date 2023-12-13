<?php

    /*
        ordenar.php

        Permite mostrar los libros ordenados por criterio ASC a partir de las siguientes columnas:
        - id
        - titulo
        - autor
        - editorial
        - unidades
        - coste
        - pvp

    */

    # Cargamos config
    include('config/config.php');

    # Cargamos librería
    include('libs/funciones.php');
   
    # Cargamos las clases bbdd
    include("class/class.conexion.php");
    include("class/class.libros.php");

    # Modelo
    include("models/model.ordenar.php");

    # Vista
    include("views/view.index.php");

?>