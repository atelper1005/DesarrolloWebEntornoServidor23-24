<?php 

    /*

        Perfiles
        1-Administrador
        2-Editor
        3-Registrado

        #Definir privilegios como variables globales
    
    */

$GLOBALS['alumno']['main'] = [1, 2, 3];
$GLOBALS['alumno']['new'] = [1, 2];
$GLOBALS['alumno']['edit'] = [1, 2];
$GLOBALS['alumno']['delete'] = [1];
$GLOBALS['alumno']['show'] = [1, 2, 3];
$GLOBALS['alumno']['filter'] = [1, 2, 3];
$GLOBALS['alumno']['order'] = [1, 2, 3];