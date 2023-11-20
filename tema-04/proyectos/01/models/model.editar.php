<?php
    /*
    
        Modelo: model.create.php
        Descripción: añade un nuevo elemento a la tabla

        Método POST:
                    -id del articulo que quiero añadir
                    -descripcion
                    -modelo
                    -categoria
                    -unidades
                    -precio
    
    */

    #Cargamos las categorías y creamos un Array de Alumnos
    $cursos = ArrayAlumnos::getCurso();
    $asignaturas = ArrayAlumnos::getAsignaturas();

    #Creamos un objeto de la clase ArrayAlumnos
    $alumnos = new ArrayAlumnos();

    #Cargo los datos
    $alumnos->getAlumno();

    #Obtengo el indice del  artículo que deseo editar
    $indice = $_GET['indice'];


    #Pillamos el índice del alumno que queremos editar
    $alumno = $alumnos->read($indice);

?>