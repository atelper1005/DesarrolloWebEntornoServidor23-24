<?php
    /*
    
        Modelo: model.eliminar.php
        Descripción: elimina un elemento de la tabla

        Método GET:
                    -id del libro que quiero eliminar
    
    */

     // cargamos las tablas
    $curso = ArrayAlumnos::getCurso();
    $asignaturas = ArrayAlumnos::getAsignaturas();

    $alumnos = new ArrayAlumnos();
    $alumnos->getAlumno();
 
     // Extraemos el id a través del método get
     $indice = $_GET['indice'];
 
     // invocamos a la función eliminar
     $alumnos->delete($indice);
 
     // Notificacion
     $notificacion="Alumno eliminado con éxito";
?>