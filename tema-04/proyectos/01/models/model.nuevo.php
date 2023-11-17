<?php

    /*
    
        Modelo: model.nuevo.php

        Descripción: Genera un array de objetos de articulos
    
    */

    #Cargamos los arrays a partir de los metodos estaticos de la clase ArrayArticulos
    $curso = ArrayAlumnos::getCurso();
    $asignaturas = ArrayAlumnos::getAsignaturas();

    #Creamos un objeto de la clase ArrayArticulos
    $alumnos = new ArrayAlumnos();

    #Cargo los datos
    $alumnos->getAlumno();
?>