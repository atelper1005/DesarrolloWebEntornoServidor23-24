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

    // Carga de categorias y marcas
    $curso = ArrayAlumnos::getCurso();
    $asignaturas = ArrayAlumnos::getAsignaturas();

   // Cargamos el array de objetos con articulos
    $alumnos = new ArrayAlumnos();
    $alumnos->getAlumno();

   // Recogemos los datos del formulario
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $fecha_nacimiento = date('d/m/Y', strtotime($fecha_nacimiento));
    $curso = $_POST['curso'];
    $asignaturas = $_POST['asignaturas'];


   #Creamos un objeto alumno a partir de los detalles del formulario
   $alumno = new Alumno(
        $id,
        $nombre,
        $apellidos,
        $email,
        $fecha_nacimiento,
        $curso,
        $asignaturas
    );

   // Añadimos el nuevo alumno(objeto) usando la funcion create
   $alumnos->create($alumno);

   // Generamos una notificación
   $notificacion = "Alumno creado con éxito";

?>