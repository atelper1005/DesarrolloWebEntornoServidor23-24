<?php

    /*

        Modelo editar.php

    */
  
    $id = $_GET['id'];

    // creamos objeto de la clase conexion 
    $conexion = new Corredores();

    // extraigo los valores de los alumnos y de los cursos
    $categorias = $conexion->getCategorias();

    // Buscamos el alumno a editar
    $corredor = $conexion->read_corredor($id);
    
?>