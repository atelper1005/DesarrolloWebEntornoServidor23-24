<?php 

/* 

Para usar ZipArchive es necesario ir a php.ini

y habilitar/descomentar "extension=zip", luego reiniciar apache

*/

//Creamos el objeto de la clase ZipArchive
$zip = new ZipArchive();

//Abrir archivo zip
if ($zip->open('files.zip', ZipArchive::CREATE) === true) {
    //Añadir ficheros al zip manualmente
    $zip->addFile('files/archivo-01.txt', 'files/figma.txt');
    $zip->addFile('files/archivo-02.PNG');
    $zip->addFile('files/archivo-03.war', 'files/archivo-03.war');

    //Proceso finalizado
    $zip->close();
    echo "Archivo comprimido correctamente";
} else {
    echo "error";
}