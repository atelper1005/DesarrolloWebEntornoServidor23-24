<?php 
    #Todos los calculos a la vez

$valor1 = $_POST['valor1'];

echo '<br>';

$binario = decbin($valor1);

echo '<br>';

$octal = decoct($valor1);

echo '<br>';

$hexadecimal = dechex($valor1);

?>