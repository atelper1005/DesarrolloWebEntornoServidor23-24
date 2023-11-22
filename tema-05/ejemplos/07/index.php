<?php

/*

    Conexion mediante PDO

*/

$server = 'localhost';
$user   = 'root';
$pass   = '';
$database = 'fp';

#Conexion
try {
    $dsn = "mysql:host=$server;dbname=$database";

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    $pdo = new PDO($dsn, $user, $pass, $options);

    echo "Todo correcto";

} catch(PDOException $e) {

    include('errorDB.php');
    exit();

}

?>