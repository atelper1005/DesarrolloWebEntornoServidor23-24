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

?>