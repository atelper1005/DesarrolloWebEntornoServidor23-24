<?php

    /*

        Modelo Principal index

    */

    # Ejecuto el constructor de la clase conexión
    // Conectando a la base de datos FP
    $conexion = new Corredores();

    # Extraigo los valores de los alumnos
    $corredores = $conexion->getCorredores();


?>