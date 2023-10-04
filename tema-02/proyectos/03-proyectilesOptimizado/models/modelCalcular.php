<?php
    /*
    
        Modelo: modelCalcular.php
        Descripción: Cálculos con los valores del formulario
    
    */

    //Definir la constante de la Gravedad
    define("G", 9.8);

    //Definir las variables iniciales
    $velInicial = $_POST["velInicial"];
    $angulo = $_POST["angulo"];

    //Hacer los cálculos
    $radianes = deg2rad($angulo);

    $velInicialX = $velInicial * cos($radianes);

    $velInicialY = $velInicial * sin($radianes);

    $alcance = (pow($velInicial, 2) * sin($radianes * 2)) / G;

    $tiempoVuelo = 2 * ($velInicialY / G);

    $altura = (pow($velInicial, 2) * pow(sin($radianes), 2)) / (2 * G);

    //Formatear los cálculos
    $velInicial = number_format($velInicial, 2, ",", ".");
    $angulo = number_format($angulo, 2, ",", ".");
    $radianes = number_format($radianes, 5, ",", ".");
    $velInicialX = number_format($velInicialX, 2, ",", ".");
    $velInicialY = number_format($velInicialY, 2, ",", ".");
    $alcance = number_format($alcance, 2, ",", ".");
    $tiempoVuelo = number_format($tiempoVuelo, 2, ",", ".");
    $altura = number_format($altura, 2, ",", ".");

?>