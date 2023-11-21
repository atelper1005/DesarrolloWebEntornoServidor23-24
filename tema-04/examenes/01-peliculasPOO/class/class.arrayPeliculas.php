<?php

class ArrayPeliculas {
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

        static public function getPais() {
            $paises = array("Afganistán","Albania","Alemania","Andorra","Angola","Antigua y Barbuda","Arabia Saudita","Argelia","Argentina","Armenia","Australia","Austria","Azerbaiyán","Bahamas","Bangladés","Barbados","Baréin","Bélgica","Belice","Benín","Bielorrusia","Birmania","Bolivia","Bosnia y Herzegovina","Botsuana","Brasil","Brunéi","Bulgaria","Burkina Faso","Burundi","Bután","Cabo Verde","Camboya","Camerún","Canadá","Catar","Chad","Chile","China","Chipre","Ciudad del Vaticano","Colombia","Comoras","Corea del Norte","Corea del Sur","Costa de Marfil","Costa Rica","Croacia","Cuba","Dinamarca","Dominica","Ecuador","Egipto","El Salvador","Emiratos Árabes Unidos","Eritrea","Eslovaquia","Eslovenia","España","Estados Unidos","Estonia","Etiopía","Filipinas","Finlandia","Fiyi","Francia","Gabón","Gambia","Georgia","Ghana","Granada","Grecia","Guatemala","Guyana","Guinea","Guinea ecuatorial","Guinea-Bisáu","Haití","Honduras","Hungría","India","Indonesia","Irak","Irán","Irlanda","Islandia","Islas Marshall","Islas Salomón","Israel","Italia","Jamaica","Japón","Jordania","Kazajistán","Kenia","Kirguistán","Kiribati","Kuwait","Laos","Lesoto","Letonia","Líbano","Liberia","Libia","Liechtenstein","Lituania","Luxemburgo","Madagascar","Malasia","Malaui","Maldivas","Malí","Malta","Marruecos","Mauricio","Mauritania","México","Micronesia","Moldavia","Mónaco","Mongolia","Montenegro","Mozambique","Namibia","Nauru","Nepal","Nicaragua","Níger","Nigeria","Noruega","Nueva Zelanda","Omán","Países Bajos","Pakistán","Palaos","Palestina","Panamá","Papúa Nueva Guinea","Paraguay","Perú","Polonia","Portugal","Reino Unido","República Centroafricana","República Checa","República de Macedonia","República del Congo","República Democrática del Congo","República Dominicana","República Sudafricana","Ruanda","Rumanía","Rusia","Samoa","San Cristóbal y Nieves","San Marino","San Vicente y las Granadinas","Santa Lucía","Santo Tomé y Príncipe","Senegal","Serbia","Seychelles","Sierra Leona","Singapur","Siria","Somalia","Sri Lanka","Suazilandia","Sudán","Sudán del Sur","Suecia","Suiza","Surinam","Tailandia","Tanzania","Tayikistán","Timor Oriental","Togo","Tonga","Trinidad y Tobago","Túnez","Turkmenistán","Turquía","Tuvalu","Ucrania","Uganda","Uruguay","Uzbekistán","Vanuatu","Venezuela","Vietnam","Yemen","Yibuti","Zambia","Zimbabue");
            asort($paises);
            return $paises; 
        }

        static public function getGeneros() {
            $generos = [
                'Acción', 
                'Aventura', 
                'Comedia', 
                'Drama', 
                'Deportes', 
                'Ensayo', 
                'Terror', 
                'Bélica', 
                'Suspense', 
                'Histórico'
            ];

            asort($generos);
            return $generos;
        }

        public function getPeliculas(){
        
            $pelicula = new Pelicula(
                    1,
                    'Joker',
                    59,
                    'Todd Phillips',
                    [3, 8],
                    2019
            );
            $this->tabla[] = $pelicula;

            $pelicula = new Pelicula(
                    2,
                    'Mientras dure la guerra',
                    58,
                    'Alejandro Amenábar',
                    [3, 9],
                    2019
            );
            $this->tabla[] = $pelicula;

            $pelicula = new Pelicula(
                    3,
                    'La vida es bella',
                    89,
                    'Roberto Benini',
                    [3, 7, 9],
                    2019
            );
            $this->tabla[] = $pelicula;

            $pelicula = new Pelicula(
                    4,
                    'Interestellar',
                    59,
                    'Christopher Nolan',
                    [1, 3, 8],
                    2014
            );
            $this->tabla[] = $pelicula;
    
        }

        static public function mostrarGeneros($generos, $generosPelicula) {
            $arrayPeliculas = [];
    
            foreach ($generosPelicula as $indice) {
                $arrayPeliculas[] = $generos[$indice];
            }
    
            asort($arrayPeliculas);
            return $arrayPeliculas;
        }   

        public function create(Pelicula $data) {
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
    
        public function update($indice, Pelicula $data)
        {
            $this->tabla[$indice] = $data;
        }
}

?>