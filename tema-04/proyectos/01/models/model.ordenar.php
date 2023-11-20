<?php

/*

    Modelo: model.ordenar.php
    Descripción: muestra un elemento de la tabla a partir de un criterio

    Método GET:
                -criterio: titulo, autor, genero, precio

*/

// Cargar las categorías y crear un Array de Artículos
$cursos = ArrayAlumnos::getCurso();
$asignaturas = ArrayAlumnos::getAsignaturas();
 
# Creamos un objeto de la clase ArrayAlumnos
$alumnos = new ArrayAlumnos();
$alumnos->getAlumno();

// Cargar el criterio de ordenación
$criterio = $_GET['criterio'];

// Invocamos la función que se encargará de ordenar el contenido de la vista
//$alumnos->order($criterio);

?>