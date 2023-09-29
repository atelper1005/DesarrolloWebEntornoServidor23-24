<?php

//FUNCION IS_NULL()

//La variable no está definida
// Devuelve true y lanza un aviso tipo Notice: undefined variable
var_dump( is_null($var) );

echo "<BR>";

//Se asigna la constante NULL
$var = NULL;
var_dump( is_null($var) );

echo "<BR>";

//Se declara la variable pero no se le asigna ningún valor
$var;
var_dump( is_null($var) );

echo "<BR>";

/*

La variable es destruida con unset()

$var = "Hola";
unset($var);
var_dump( is_null($var) );

echo "<BR>";

*/

//Si le asignamos un valor nos daría false
$var = 0;
var_dump(is_null($var));

//También nos da falso con cadenas y arrays vacías

?>