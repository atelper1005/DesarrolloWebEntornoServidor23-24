<?php

    /*
        Controlador principal create con PDO
    */

    # Cargamos configuración
    include('config/db.php');

    # Cargamos librería de funciones

    #Clases
    include 'class/class.conexion.php';
    include 'class/class.corredor.php';
    include 'class/class.corredores.php';

    #Modelo
    include 'models/model.create.php';

    #Redirecciono controlador principal
    header('location: index.php');
    // include ('views/view.index.php'); 

?>