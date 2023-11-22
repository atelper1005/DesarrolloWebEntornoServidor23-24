<?php

    #Conecto con la base de datos
    $fp = new Fp();

    #Creo un objeto con los detalles del alumno
    $cursos = $fp->getCursos();

?>