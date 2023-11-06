<?php

include("class/class.vehiculo.php");
include("class/class.deportivo.php");

$coche_1 = new Deportivo(
    'audi q5',
    'Audi',
    '1234 RTY',
    0
);

$coche_2 = new Vehiculo();

var_dump($coche_1);
var_dump($coche_2);

unset($coche_2);

?>