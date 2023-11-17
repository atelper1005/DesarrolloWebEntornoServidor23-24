<?php

    /*

        Modelo: model.update.php
        Descripcion: actualiza los detalles de un  artículo

        Método POST:
                    - id
                    - descripcion
                    - modelo
                    - genero
                    - unidades
                    - precio

        Método GET:
                    - indice -> índice  del articulo que quiero editar

    */

// Cargar las categorías y crear un Array de Artículos
$curso = ArrayAlumnos::getCurso();
$asignaturas = ArrayAlumnos::getAsignaturas();

$alumnos = new ArrayAlumnos();
$alumnos->getAlumno();

// Extraer índice del artículo que voy a editar
$indice = $_GET['indice'];

// Extraemos los detalles del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$fecha_nacimiento = date('d/m/Y', strtotime($fecha_nacimiento));
$curso = $_POST['curso'];
$asignaturasNuevo = $_POST['asignaturas'];

$alumno = new Alumno(
    $id,
    $nombre,
    $apellidos,
    $email,
    $fecha_nacimiento,
    $curso,
    $asignaturasNuevo
);

//Llamamos a la función update para editar el alumno
$alumnos->update($indice,$alumno);

// Generar notificación
$notificacion = "Alumno editado correctamente";
?>