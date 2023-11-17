<?php
    /*
    
        Modelo: model.mostrar.php
        Descripción: muestra un elemento de la tabla

        Método GET:
                    -id del libro que quiero editar
    
    */

   #Cargamos las categorías y creamos un Array de Artículos
    $curso = ArrayAlumnos::getCurso();
    $asignaturas = ArrayAlumnos::getAsignaturas();

   #Creamos un objeto de la clase ArrayArticulos
   $alumnos = new ArrayAlumnos();

   #Cargo los datos
   $alumnos->getAlumno();

   #Obtengo el indice del  artículo que deseo editar
   $indice = $_GET['indice'];

   #Pillamos el índice del articulo que queremos editar
   $alumno = $alumnos->read($indice);

?>