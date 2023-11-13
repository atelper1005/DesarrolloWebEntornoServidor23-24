<?php

    /*
    
        class.arrayAlumno.php

        tabla de Alumnos

        Es un array donde cada elemento es un objeto de la clase Alumno
    
    */

    class ArrayAlumnos {
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

        static public function getCurso() {
            $cursos = [
                '1SMR',
                '2SMR',
                '1DAW',
                '2DAW',
                '1ADI',
                '2ADI'
            ];

            asort($cursos);
            return $cursos;
        }

        static public function getAsignaturas() {
            $asignaturas = [
                '1DAW Bases de Datos',
                '1DAW Entornos de Desarrollo',
                '1DAW Formación y Orientación Laboral',
                '1DAW Lenguaje de Marcas y Sistemas de Gestión de la Información',
                '1DAW Programación',
                '1DAW Sistemas Informáticos',
                '2DAW Desarrollo web Entorno Cliente',
                '2DAW Desarrollo web Entorno Servidor',
                '2DAW Despliegue Aplicaciones Web'
            ];

            asort($asignaturas);
            return $asignaturas;
        }

        public function getDatos() {
            #Alumno 1
            $alumno = new Alumno(
                1,
                'Juan Manuel',
                'Herrera Ramírez',
                'jmherrera@gmail.com',
                '06/03/2002',
                2,
                [3, 4, 7]
            );

            #Añadir articulo a la tabla
            $this->tabla[] = $alumno;

            #Alumno 2
            $alumno = new Alumno(
                2,
                'Antonio Jesús',
                'Téllez Perdigones',
                'atelper@gmail.com',
                '10/05/1999',
                2,
                [6, 7, 8]
            );

            #Añadir articulo a la tabla
            $this->tabla[] = $alumno;

            #Alumno 3
            $alumno = new Alumno( 
                3, 
                'Pablo', 
                'Mateos Palas', 
                'pmatpal0105@g.educaand.es', 
                '01/05/2004', 
                3, 
                [3, 7, 8] );

            #Añadir articulo a la tabla
            $this->tabla[] = $alumno;

            #Alumno 4
            $alumno = new Alumno( 
                4, 
                'Juan Maria', 
                'Mateos Ponce', 
                'jmmateos@gmail.com', 
                '20/10/2004', 
                4, 
                [6, 7, 8] );

            #Añadir articulo a la tabla
            $this->tabla[] = $alumno;

            #Alumno 5
            $alumno = new Alumno(
                5,
                'Componente - Tarjeta gráfica NVIDIA GeForce RTX 3080',
                'NVIDIA GeForce RTX 3080',
                2,
                [1, 3, 4],
                10,
                999.99
            );

            #Añadir articulo a la tabla
            $this->tabla[] = $alumno;

            #Alumno 6
            $alumno = new Alumno(
                6,
                'Pantalla - Monitor LG 27GL850-B',
                'LG 27GL850-B',
                3,
                [2, 3, 5],
                30,
                499.99
            );

            #Añadir articulo a la tabla
            $this->tabla[] = $alumno;

            #Alumno 7
            $alumno = new Alumno(
                7,
                'Impresora - Epson EcoTank ET-2720',
                'Epson EcoTank ET-2720',
                4,
                [4, 5],
                20,
                249.99
            );

            #Añadir articulo a la tabla
            $this->tabla[] = $alumno;
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

        public function create(Alumno $data) {
            $this->tabla[] = $data;
        }
    
        public function delete($indice){
            unset($this->tabla[$indice]);
            array_values($this->tabla);
        }

        public function read($indice)
        {
            return $this->tabla[$indice];
        }
    
        public function update($indice, Alumno $data)
        {
            $this->tabla[$indice] = $data;
        }
    
       

    }

?>