<?php

    /*

        Modelo editar.php

    */
  
    $idCorredor = $_GET['id'];

    // creamos objeto de la clase conexion 
    $conexion = new Corredores();

    // extraigo los valores de los alumnos y de los cursos
    $categorias = $conexion->getCategorias();

    // Cargamos los clubs
    $clubs = $conexion->getClubs();

    // Buscamos el alumno a editar
    $corredor = $conexion->read_corredor($idCorredor);
    
?>