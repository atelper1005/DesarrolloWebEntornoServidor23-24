<?php

    /*

        index.php

        Controlador que permite realizar una consulta de libros en geslibros y mostrarlos en
        una vista a partir del diseño establecido

    */

    # Cargamos config
    include('config/config.php');

    # Cargamos librería
    include('libs/funciones.php');

    #Cargamos las clases
    include("class/class.conexion.php");
    include 'class/class.libros.php';

    #Cargamos el modelo
    include 'models/model.index.php';

    #Cargamos la vista
    include 'views/view.index.php';

?>