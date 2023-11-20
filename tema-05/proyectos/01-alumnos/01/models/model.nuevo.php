<?php

    #Conecto con la base de datos
    $db = new Fp();

    #Creo un objeto con los detalles del alumno
    $alumnos = $db->getAlumnos();

?>