<?php

include("class/class.vehiculo.php");

$coche_1 = new Vehiculo();

var_dump($coche_1);

var_dump($coche_1->getMatricula());

//Asignando contenido al objeto
$coche_1->setModelo("Audi q5");
$coche_1->setNombre("Audi");
$coche_1->setMatricula("1234 RTY");
$coche_1->setVelocidad("0");

$coche_1->aumentarVelocidad();

var_dump($coche_1);

?>