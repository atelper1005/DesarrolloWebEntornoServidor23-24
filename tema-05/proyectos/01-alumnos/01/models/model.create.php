<?php

    /*
    
        metodo post
    
    */

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];

$alumno = new Alumno();

$alumno->id = null;
$alumno->nombre = $nombre;
$alumno->apellidos = $apellidos;

$fp = new Fp();
$fp->insertAlumno($alumno);

header('location: index.php');

?>