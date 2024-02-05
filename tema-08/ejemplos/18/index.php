<?php 

/* 

Para usar ZipArchive es necesario ir a php.ini

y habilitar/descomentar "extension=zip", luego reiniciar apache

*/

//Creamos el objeto de la clase ZipArchive
$zip = new ZipArchive();

//Abrir archivo zip
if ($zip->open('files.zip', ZipArchive::CREATE) === true) {
    //usar la funcion glob
    $files = glob('files/*');

    foreach($files as $file){
        $zip->addFile($file);
    }

    //Proceso finalizado
    $zip->close();
    echo "Carpeta comprimida correctamente";
} else {
    echo "error";
}