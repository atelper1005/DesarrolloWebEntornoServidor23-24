<?php

    /*
    
        Controlador: create.php
        
        Descripción: permite añadir a la tabla un nuevo libro a partir de los detalles del formulario.
        Luego lo muestra en pantalla por la vista viewIndex
        
    */

    #Clases
    include 'class/class.alumno.php';
    include 'class/class.arrayAlumno.php';

    #Modelo
    include 'models/model.create.php';

    #Vista
    //Cargo la vista
    include 'views/view.index.php';
    
?>