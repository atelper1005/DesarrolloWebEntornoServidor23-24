<?php

    /*
    
    COntrolador: index.php
    Descripcion: crea un array con los detalles de los alumnos
    
    */

    #Conecto con la base de datos
    $db = new Fp();

    #Creo un objeto con los detalles del alumno
    $alumnos = $db->getAlumnos();
    

?>