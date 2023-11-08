<?php

    /*
    
        class.arrayArticulo.php

        tabla de articulos

        Es un array donde cada elemento es un objeto de la clase Articulo
    
    */

    class ArrayArticulos {
        private $tabla;

        public function __construct() {
            $this->tabla = [];
        }

        /**
         * Get the value of tabla
         */ 
        public function getTabla()
        {
                return $this->tabla;
        }

        /**
         * Set the value of tabla
         *
         * @return  self
         */ 
        public function setTabla($tabla)
        {
                $this->tabla = $tabla;

                return $this;
        }

        static public function getMarcas() {
            $marcas = [
                'Apple',
                'Xiaomi',
                'Samsung',
                'Intel',
                'Asus',
                'Lenovo'
            ];

            asort($marcas);
            return $marcas;
        }

        static public function getCategorias() {
            $categorias = [
                'Portátil',
                'PC sobremesa',
                'Componentes',
                'Pantallas',
                'Impresora',
                'Fotografia'
            ];

            asort($categorias);
            return $categorias;
        }

        public function getDatos() {
            #Articulo 1
            $articulo = new Articulo(
                1,
                'Portátil - HP 15-DB0074NS',
                'HP 15-DB0074NS',
                0,
                [1, 3, 5],
                120,
                379
            );

            #Añadir articulo a la tabla
            $this->tabla[] = $articulo;

            #Articulo 2
            $articulo = new Articulo(
                2,
                'Portátil AMD A4-9125, 8 GB RAM, 125 GB',
                'HP 255 G7, 15.6',
                0,
                [2, 3, 5],
                200,
                205.50
            );

            #Añadir articulo a la tabla
            $this->tabla[] = $articulo;

            #Articulo 3
            $articulo = new Articulo(
                3,
                'PC sobremesa - Lenovo Intel® Core™ i3-8100',
                'ideacentre 510S-07ICB',
                1,
                [3, 5],
                50,
                1295.95
            );

            #Añadir articulo a la tabla
            $this->tabla[] = $articulo;

            #Articulo 4
            $articulo = new Articulo(
                4,
                'PC sobremesa - HP 290 APU AMD Dual-core A6',
                'HP 290-a0002ns',
                1,
                [1, 2, 5],
                60,
                1595.95
            );

            #Añadir articulo a la tabla
            $this->tabla[] = $articulo;

            #Articulo 5
            $articulo = new Articulo(
                5,
                'Componente - Tarjeta gráfica NVIDIA GeForce RTX 3080',
                'NVIDIA GeForce RTX 3080',
                2,
                [1, 3, 4],
                10,
                999.99
            );

            #Añadir articulo a la tabla
            $this->tabla[] = $articulo;

            #Articulo 6
            $articulo = new Articulo(
                6,
                'Pantalla - Monitor LG 27GL850-B',
                'LG 27GL850-B',
                3,
                [2, 3, 5],
                30,
                499.99
            );

            #Añadir articulo a la tabla
            $this->tabla[] = $articulo;

            #Articulo 7
            $articulo = new Articulo(
                7,
                'Impresora - Epson EcoTank ET-2720',
                'Epson EcoTank ET-2720',
                4,
                [4, 5],
                20,
                249.99
            );

            #Añadir articulo a la tabla
            $this->tabla[] = $articulo;
        }

        //Podemos declararlo estatico porque no modifica ningun atributo de la clase
        static public function mostrarCategorias($categorias, $categoriasArticulo) {
            $arrayCategorias = [];
    
            foreach ($categoriasArticulo as $indice) {
                $arrayCategorias[] = $categorias[$indice];
            }
    
            asort($arrayCategorias);
            return $arrayCategorias;
        }   

        public function create(Articulo $data) {
            $this->tabla[] = $data;
        }
    }

?>