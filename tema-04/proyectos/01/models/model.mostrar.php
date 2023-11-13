<?php
    /*
    
        Modelo: model.mostrar.php
        Descripción: muestra un elemento de la tabla

        Método GET:
                    -id del libro que quiero editar
    
    */

   #Cargamos las categorías y creamos un Array de Artículos
   $categorias = ArrayArticulos::getCategorias();
   $marcas = ArrayArticulos::getMarcas();

   #Creamos un objeto de la clase ArrayArticulos
   $articulos = new ArrayArticulos();

   #Cargo los datos
   $articulos->getDatos();

   #Obtengo el indice del  artículo que deseo editar
   $indice = $_GET['indice'];

   #Pillamos el índice del articulo que queremos editar
   $articulo = $articulos->read($indice);

?>