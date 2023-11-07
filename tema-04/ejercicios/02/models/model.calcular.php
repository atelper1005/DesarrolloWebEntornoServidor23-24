<?php
/*
    Modelo: modelCalcular.php
    Descripción: realizará la operación de suma
*/

// Recogemos los valores enviados a través del método POST
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$operacion = $_POST['operacion'];

// Creamos un objeto de tipo Calculadora
$calculo = new Calculadora($valor1, $valor2, $operacion, null);

switch ($operacion) {
    case 'sumar':
        $calculo->suma();
        break;
    case 'restar':
        $calculo->resta();
        break;
    case 'dividir':
        $calculo->division();
        break;
    case 'multiplicar';
        $calculo->multiplicacion();
        break;
    case 'potencia':
        $calculo->potencia();
        break;
    default:
        echo "Operacion no encontrada";
        break;
}

//var_dump($calculo);
?>