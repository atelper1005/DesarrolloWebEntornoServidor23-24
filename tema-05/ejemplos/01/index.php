<?php

/*

    IP SERVIDOR = 127.0.0.1:3306
    Conexión localhost con usuario root 
    y a la base de Datos FP

    - conexion mysqli_connect()

*/

$server = 'localhost';  //También vale la IP del servidor
$user = 'root';
$pass = '';             //O null
$bd = 'fp';

$conexion = mysqli_connect($server, $user, $pass, $bd);

if (mysqli_connect_errno()) {
    echo 'Error de Conexión Nº: '. mysqli_connect_errno();
    echo '<br>';
    echo 'Descripción Error de Conexión: '. mysqli_connect_error();
    exit();
}

echo 'Conexión establecida con éxito';

?>