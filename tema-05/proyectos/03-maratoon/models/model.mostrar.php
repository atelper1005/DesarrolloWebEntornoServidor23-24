<?php

/*
    Model: model.editar.php
    Descripción: Muestra un elemento

    Método POST: Cargaré las variables necesarias para mostrar un elemento
*/

//Pillamos el id del elemento que se va a editar a través de la variable indice del index
$id = $_GET['id']; // Capturar el ID del alumno desde la URL

//Conectamos a la base de datos
$conexion = new Corredores();  

//Le metemos los datos
$corredores = $conexion->getCorredores();
$categoria = $conexion->getCategoria($id);
$club = $conexion->getClub($id);

$corredor = $conexion->read_corredor($id);

?>