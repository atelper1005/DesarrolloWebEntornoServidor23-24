<?php

    /*

        Modelo model.nuevo.php

    */

    # Ejecuto el constructor de la clase conexión
    // Conectando a la base de datos FP
    $conexion = new Corredores();

    # Extraigo los categorias para generar dinamicamente el formulario
    $categorias = $conexion->getCategorias();

    # Extraigo los clubes para generar dinamicamente el formulario
    $clubs = $conexion->getClubs();

?>