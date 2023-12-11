<?php

/*
    Model: model.eliminar.php
    Descripción: Elimina un elemento

    Método POST: Cargaré las variables necesarias para eliminar un elemento
*/

//Pillamos el id del elemento que se va a editar a través de la variable indice del index
$id = $_GET['id']; // Capturar el ID del alumno desde la URL

//Conectamos a la base de datos
$conexion = new Corredores();  

//Con el método delete_alumno borramos el alumno a partir de los detalles del formulario
$conexion->delete_corredor($id);

?>