<?php

    /*
    
        Controlador: editar.php

        Mostrar un formulario con los detalles editables del libro seleccionado
        
    */

    #Libreria
    include 'libs/crud_funciones.php';

    #Modelo
    include 'models/model.editar.php';

    #Vista
    //Cargo la vista
    include "views/view.editar.php";
    
?>