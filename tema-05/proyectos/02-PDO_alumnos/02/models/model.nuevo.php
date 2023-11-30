<?php

    /*

        Modelo model.nuevo.php

    */

    # Ejecuto el constructor de la clase conexión
    // Conectando a la base de datos FP
    $conexion = new Alumnos();

    # Extraigo los cursos para generar dinamicamente el formulario
    $cursos = $conexion->getCursos();


?>