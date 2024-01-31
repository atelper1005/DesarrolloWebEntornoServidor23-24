<?php

    $alumnos = [
        [
            1,
            'juan',
            'perez garcia',
            '2daw', 
            'el bosque'
        ], 
        [
            2,
            'pedro',
            'romero garcia',
            '1daw',
            'Ubrique'
        ],
        [
            3, 
            'maria',
            'rodriguez perez',
            '1daw',
            'Ubrique'
        ]
    ];

    //abro el fichero, si no existe lo crea
    $alumnos_csv = fopen("csv/alumnos.csv", "ab");

    foreach ($alumnos as $alumno) {
        fputcsv($alumnos_csv, $alumno, ";");
    }

    fclose($alumnos_csv);

    echo "fichero alumnos.csv creado con éxito";

