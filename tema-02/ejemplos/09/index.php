<?php

    //Tipos de Variables

    #Tipo Boolean

    $test = false;
    echo "\$test: ";
    var_dump($test);

    echo "<BR>";

    #Tipo int
    $edad = 50;
    echo "\$edad: ";
    var_dump($edad);

    echo "<BR>";

    #Tipo float
    $altura = 1.70;
    echo "\$altura: ";
    var_dump($altura);

    echo "<BR>";

    #Tipo exponencial
    $distancia = 1.70e4;
    echo "\$distancia: ";
    var_dump($distancia);

    echo "<BR>";

    #Tipo String
    $mensaje = 'La distancia recorrida fue de $distancia km';
    echo "\$mensaje: ";
    var_dump($mensaje);

    echo "<BR>";

    #Tipo String
    $mensaje = 'La distancia recorrida fue de '. $distancia . ' km'; //Los puntos sirven para concatenar
    echo "\$mensaje: ";
    var_dump($mensaje);
?>