<?php
    /*
    
        Modelo: model.eliminar.php
        Descripción: elimina un elemento de la tabla

        Método GET:
                    -id del libro que quiero eliminar
    
    */

     // cargamos las tablas
     $categorias = ArrayArticulos::getCategorias();
     $marcas = ArrayArticulos::getMarcas();
     $articulos = new ArrayArticulos();
     $articulos->getDatos();
 
     // Extraemos el id a través del método get
     $id = $_GET['indice'];
 
 
     // invocamos a la función eliminar
     $articulos->delete($id);
 
     // Notificacion
     $notificacion="Artículo eliminado con éxito";
?>