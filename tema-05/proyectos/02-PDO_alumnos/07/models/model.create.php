<?php

    /*
    
        metodo POST:

                    - nombre
                    - apellidos
                    - email
                    - telefono
                    - direccion
                    - poblacion
                    - provincia
                    - nacionalidad
                    - DNI
                    - fechaNacimiento
                    - curso
    
    */

    $conexion = new Alumnos();

    $alumnos = $conexion->getAlumnos();
    $cursos = $conexion->getCursos();

    // Recogemos los datos del formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $poblacion = $_POST['poblacion'];
    $provincia = $_POST['provincia'];
    $nacionalidad = $_POST['nacionalidad'];
    $DNI = $_POST['dni'];
    $fechaNac = $_POST['fechaNac'];
    $id_curso = $_POST['id_curso'];

    // Creamos un objeto de la clase alumno
    $alumno = new Alumno();

    //Asignamos valores a las propiedades
    $alumno->nombre=$nombre;
    $alumno->apellidos=$apellidos;
    $alumno->email=$email;
    $alumno->telefono=$telefono;
    $alumno->direccion=$direccion;
    $alumno->poblacion=$poblacion;
    $alumno->provincia=$provincia;
    $alumno->nacionalidad=$nacionalidad;
    $alumno->dni=$DNI;
    $alumno->fechaNac=$fechaNac;
    $alumno->id_curso=$id_curso;

    // Añadimo el nuevo registro
    $conexion->insertarAlumno($alumno);

    // Generamos una notificación
    // header('location: index.php');
    $notificacion = "Alumno creado correctamente";

?>