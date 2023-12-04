<?php

    /*

        Modelo editar.php

    */
  
    $id_editar = $_GET['id'];

    // creamos objeto de la clase conexion 
    $conexion = new Alumnos();

    // extraigo los valores de los alumnos y de los cursos
    $cursos = $conexion->getCursos();

    // Buscamos el alumno a editar
    $alumno = $conexion->read_alumno($id_editar);
    

?>