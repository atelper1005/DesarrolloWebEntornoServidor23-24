<?php

/*

    Modelo: model.update.php

*/

$id_editar = $_GET['id'];

// Recogemos los datos del formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $ciudad = $_POST['ciudad'];
    $sexo = $_POST['sexo'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $email = $_POST['email'];
    $dni = $_POST['dni'];
    $categoria = $_POST['id_categoria'];
    $club = $_POST['id_club'];

// Creamos un objeto de la clase alumno
$corredor = new Corredor();

//Asignamos valores a las propiedades
$corredor->nombre = $nombre;
$corredor->apellidos = $apellidos;
$corredor->ciudad = $ciudad;
$corredor->sexo = $sexo;
$corredor->fechaNacimiento = $fechaNacimiento;
$corredor->email = $email;
$corredor->dni = $dni;
$corredor->id_categoria = $categoria;
$corredor->id_club = $club;

$conexion = new Corredores();
$conexion->update_corredor($idActualizar,$corredor);

?>