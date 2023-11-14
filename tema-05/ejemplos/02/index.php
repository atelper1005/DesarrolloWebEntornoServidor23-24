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

$conexion = new mysqli($server, $user, $pass, $bd);

if ($conexion->connect_errno) {
    echo 'Error de Conexión Nº: '. $conexion->connect_errno;
    echo '<br>';
    echo 'Descripción Error de Conexión: '. $conexion->connect_error;
    exit();
}

echo 'Conexión establecida con éxito';

//Creo una variable con el comando SQL
$sql = 'select * from alumnos order by id';

//Objeto de la clase mysqli_result
$result = $conexion->query($sql);

echo '<br>';
echo 'Número de registros: ' . $result->num_rows;
echo '<br>';
echo 'Número de columnas: ' . $result->field_count;
echo '<br>';

var_dump($result);

?>