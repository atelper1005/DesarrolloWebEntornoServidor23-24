<?php 

/* 

    Descomprimir archivo zip

*/

$archivo_zip = "files.zip";

//Creamos el objeto de la clase ZipArchive
$zip = new ZipArchive();

//Abrir archivo zip
if ($zip->open($archivo_zip) === true) {
    //extraemos con extractTo()
    $zip->extractTo('./extraccion');
   
    //Proceso finalizado
    $zip->close();
    echo "Carpeta descomprimida correctamente";
} else {
    echo "error";
}