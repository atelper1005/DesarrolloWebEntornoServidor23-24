<?php

    /*
    
        Index.php ----> Home
    
    */

    session_name('Actividad-7.1');

    session_start();

    if (isset($_SESSION['num_visitas_home'])) {
        $_SESSION['num_visitas_home']++;
    } else {
        $_SESSION['num_visitas_home'] = 1;
    }

    if (!isset($_SESSION['fecha_hora_visita'])) {
        $_SESSION['fecha_hora_visita'] = date('Y-m-d H:i:s');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 7.1 - Cookies</title>
</head>
<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="acercade.php">Sobre Nosotros</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="eventos.php">Eventos</a></li>
        <li><a href="close.php">Close</a></li>
    </ul>

    <br>

    <h3>Detalles de la página</h3>
    <ul>
        <li>Página: Home</li>
        <li>SID: <?= session_id() ?></li>
        <li>Nombre Sesión: <?= session_name() ?></li>
        <li>Fecha Inicio Sesión: <?= $_SESSION['fecha_hora_visita'] ?></li>
        <li>Visitas Home: <?= $_SESSION['num_visitas_home'] ?></li>
    </ul>
</body>
</html>