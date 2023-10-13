<?php

    /* 
    
        Array asociativo

        Valor del indice personalizado con un número o string
    
    */

    $equipos = [
        [
            'id' => 1,
            'nombre' => 'Real Madrid',
            'ciudad' => 'Madrid'
        ],
        [
            'id' => 2,
            'nombre' => 'Real Betis',
            'ciudad' => 'Sevilla'
        ],
        [
            'id' => 3,
            'nombre' => 'FC Barcelona',
            'ciudad' => 'Barcelona'
        ]
    ];

    print_r($equipos);
    echo "<br>";
    echo "<br>";

    //MODO NOVATO
    foreach($equipos as $equipo) {
        echo 'id: '.$equipo['id'];
        echo 'nombre: '.$equipo['nombre'];
        echo 'ciudad: '.$equipo['ciudad'];
    }

?>