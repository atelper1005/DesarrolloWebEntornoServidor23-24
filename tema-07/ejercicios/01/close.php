<?php
session_start();

// Registramos el tiempo de inicio de la sesión si aún no lo hemos hecho
if (!isset($_SESSION['fecha_hora_inicio'])) {
    $_SESSION['fecha_hora_inicio'] = time();
}

// Actualizamos el contador de visitas al home
if (isset($_SESSION['num_visitas_home'])) {
    $_SESSION['num_visitas_home']++;
} else {
    $_SESSION['num_visitas_home'] = 1;
}

// Registramos el tiempo de finalización de la sesión
$_SESSION['fecha_hora_fin'] = time();

// Calculamos la duración de la sesión
$_SESSION['duracion_sesion'] = $_SESSION['fecha_hora_fin'] - $_SESSION['fecha_hora_inicio'];

// Desregistramos todas las variables de sesión y destruimos la sesión
session_unset();
session_destroy();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Close Session</title>
</head>
<body>
    <h3>Sesión Finalizada</h3>
    <ul>
        <li>SID de la sesión: <?= session_id() ?></li>
        <li>Nombre de la sesión: <?= session_name() ?></li>
        <li>Contador de visitas totales en la web: <?= $_SESSION['num_visitas_home'] ?></li>
        <li>Fecha hora de inicio de la sesión: <?= $_SESSION['fecha_hora_inicio'] ?></li>
        <li>Fecha hora de fin de la sesión: <?= $_SESSION['fecha_hora_fin'] ?></li>
        <li>Duración sesión: <?= $_SESSION['duracion_sesion'] ?> segundos</li>
    </ul>
</body>
</html>