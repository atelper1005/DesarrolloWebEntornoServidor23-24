<?php

    /*
    
        metodo post
    
    */

    $db= new Fp();

    // Recogemos los datos del formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['mail'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $poblacion = $_POST['poblacion'];
    $provincia = $_POST['provincia'];
    $nacionalidad = $_POST['nacionalidad'];
    $DNI = $_POST['dni'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $curso = $_POST['curso'];

    // Creamos un objeto de la clase alumno
    $alumno = new Alumno();

    $alumno->nombre=$nombre;
    $alumno->apellidos=$apellidos;
    $alumno->email=$email;
    $alumno->telefono=$telefono;
    $alumno->direccion=$direccion;
    $alumno->poblacion=$poblacion;
    $alumno->provincia=$provincia;
    $alumno->nacionalidad=$nacionalidad;
    $alumno->dni=$DNI;
    $alumno->fecha_nacimiento=$fechaNacimiento;
    $alumno->id_curso=$curso;

    // Añadimo el nuevo registro
    $db->insertarAlumno($alumno);

    // Generamos una notificación
    $notificacion = "Alumno añadido con éxito";

    // Redireccionamos controlador principal
    header('location: index.php');

?>