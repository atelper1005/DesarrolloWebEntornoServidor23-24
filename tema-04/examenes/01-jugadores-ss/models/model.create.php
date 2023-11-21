<?php

    # Creo el objeto de la clase arrayUsuarios
    $jugadores = new tablaJugadores();

    # Obtengo arrays de paises, posiciones y equipos
    $paises = tablaJugadores::getPaises();
    $posiciones = tablaJugadores::getPosiciones();
    $equipos = tablaJugadores::getEquipos();

   // Recogemos los datos del formulario
   $id = $_POST['id'];
   $nombre = $_POST['nombre'];
   $numero = $_POST['numero'];
   $pais = $_POST['paises'];
   $equipo = $_POST['equipos'];
   $indicePosiciones = $_POST['posiciones'];
   $contrato = $_POST['contrato'];


  #Creamos un objeto alumno a partir de los detalles del formulario
  $jugador = new Jugador(
       $id,
       $nombre,
       $numero,
       $pais,
       $equipo,
       $indicePosiciones,
       $contrato
   );

    # Cargo los datos
    $jugadores->getDatos();

    // Añadimos el nuevo alumno(objeto) usando la funcion create
   $jugadores->create($jugador);

    # Obtengo la tabla de usuarios mediante método getArray()
    $t_jugadores = $jugadores->getTabla();

?>