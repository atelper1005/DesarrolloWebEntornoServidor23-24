<?php
    // Obtener el número del mes
    $numeroMes = date('m');

    // Inicializar una variable para almacenar el nombre del mes en español
    $mesEsp = '';

    // Utilizar switch para asignar el nombre del mes en español
    switch ($numeroMes) {
        case '01':
            $mesEsp = 'Enero';
            break;
        case '02':
            $mesEsp = 'Febrero';
            break;
        case '03':
            $mesEsp = 'Marzo';
            break;
        case '04':
            $mesEsp = 'Abril';
            break;
        case '05':
            $mesEsp = 'Mayo';
            break;
        case '06':
            $mesEsp = 'Junio';
            break;
        case '07':
            $mesEsp = 'Julio';
            break;
        case '08':
            $mesEsp = 'Agosto';
            break;
        case '09':
            $mesEsp = 'Septiembre';
            break;
        case '10':
            $mesEsp = 'Octubre';
            break;
        case '11':
            $mesEsp = 'Noviembre';
            break;
        case '12':
            $mesEsp = 'Diciembre';
            break;
        default:
            $mesEsp = 'Mes no válido';
            break;
    }

    // Mostrar el resultado
    echo "<p>El nombre del mes en español es: $mesEsp</p>";
    ?>