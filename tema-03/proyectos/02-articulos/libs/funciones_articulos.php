<?php


    //Genero la tabla de categorias

    function generar_tabla_categorias() {

        $categorias = [
            'Portátil',
            'PC sobremesa',
            'Componentes',
            'Pantallas',
            'Impresora',
            'Fotografia'
        ];

        return $categorias;
    }


    //Genero la tabla de artículos

    function generar_tabla_articulos() {

        $articulos = [
            [
                'id' => '1',
                'descripcion'=> 'Portátil - HP 15-DB0074NS',
                'modelo' => 'HP 15-DB0074NS',
                'categoria' => 0,
                'unidades' => 120,
                'precio' => 379
            ],
            [
                'id' => '2',
                'descripcion'=> 'Portátil AMD A4-9125, 8 GB RAM, 125 GB',
                'modelo' => 'HP 255 G7, 15.6',
                'categoria' => 0,
                'unidades' => 200,
                'precio' => 205.50
            ],
            [
                'id' => '3',
                'descripcion'=> 'PC sobremesa - Lenovo Intel® Core™ i3-8100',
                'modelo' => 'ideacentre 510S-07ICB',
                'categoria' => 1,
                'unidades' => 50,
                'precio' => 1295.95
            ],
            [
                'id' => '4',
                'descripcion'=> 'PC sobremesa - HP 290 APU AMD Dual-core A6',
                'modelo' => 'HP 290-a0002ns',
                'categoria' => 1,
                'unidades' => 60,
                'precio' => 1595.95
            ],
            [
                'id' => '5',
                'descripcion'=> 'Componente - Tarjeta gráfica NVIDIA GeForce RTX 3080',
                'modelo' => 'NVIDIA GeForce RTX 3080',
                'categoria' => 2,
                'unidades' => 10,
                'precio' => 999.99
            ],
            [
                'id' => '6',
                'descripcion'=> 'Pantalla - Monitor LG 27GL850-B',
                'modelo' => 'LG 27GL850-B',
                'categoria' => 3,
                'unidades' => 30,
                'precio' => 499.99
            ],
            [
                'id' => '7',
                'descripcion'=> 'Impresora - Epson EcoTank ET-2720',
                'modelo' => 'Epson EcoTank ET-2720',
                'categoria' => 4,
                'unidades' => 20,
                'precio' => 249.99
            ]
        ];

        return $articulos;
    }

    function ultimoId($articulos = []){
        // Declaramos una variable vacia
        $ultimoId = 0;
        foreach ($articulos as $valor) {  
            if ($valor['id'] > $ultimoId) {
                $ultimoId = $valor['id'];
        }
    }
    return $ultimoId;
    }

    function buscar_en_tabla($articulos = [], $columna, $valor) {

        $columna_valores = array_column($articulos, $columna);
        return array_search($valor, $columna_valores, false);
    }


    function nuevo ($articulos = [], $articulo) {
        $articulos[] = $articulo;

        return $articulos;
    }

    function eliminar($articulos = [], $id) {
        $indice_eliminar = buscar_en_tabla($articulos, 'id', $id);

        //comparacion estricta para distinguir el false del 0
        if ($indice_eliminar !== false) {
            //elimino el libro seleccionado
            unset($articulos[$indice_eliminar]);

            //reconstruyo el array
            $articulos = array_values($articulos);
        }

        return $articulos;
    }

    function actualizar($articulos = [], $indice, $elemento) {
        $articulos[$indice] = $elemento;
        return $articulos;
    }

    function ordenar($articulos, $criterio) {

        //Validar criterio
        if (!in_array($criterio, array_keys($articulos[0]))) {
        echo "ERROR! Criterio de ordenación inexistente";
        exit();
        }

        $aux = array_column($articulos, $criterio);

        // Funcion array multisort
        array_multisort($aux, SORT_ASC, $articulos);

        return $articulos;
    }

    function buscar($articulos = [], $expresion) {
        // Creamos un array vacio donde se cargaran las filas que cumplan con la expresion
        $aux = [];

        foreach($articulos as $articulo) {
            if(array_search($expresion, $articulo, false)) {
            $aux[] = $articulo;
            }
        }

        #Validar la busqueda
        if(!empty($aux)) {
            $articulos = $aux;
        } 

        return $aux;
    }

?>