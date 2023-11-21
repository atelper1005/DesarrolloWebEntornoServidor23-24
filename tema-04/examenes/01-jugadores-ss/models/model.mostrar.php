<?php

    # Creo el objeto de la clase arrayUsuarios
    $jugadores = new tablaJugadores();

    # Obtengo arrays de paises, posiciones y equipos
    $paises = tablaJugadores::getPaises();
    $posiciones = tablaJugadores::getPosiciones();
    $equipos = tablaJugadores::getEquipos();

    $indice = $_GET['id'];

    $jugador = $jugadores->read($indice);

    # Cargo los datos
    $jugadores->getDatos();

    # Obtengo la tabla de usuarios mediante método getArray()
    $t_jugadores = $jugadores->getTabla();

?>