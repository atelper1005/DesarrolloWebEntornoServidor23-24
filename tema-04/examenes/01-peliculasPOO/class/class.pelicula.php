<?php

    class Pelicula {
        public $id;
        public $titulo;
        public $pais;
        public $director;
        public $generos;
        public $ano;

        public function __construct(
            $id=null, 
            $titulo=null, 
            $pais=null, 
            $director=null, 
            $generos=[], 
            $ano=null
        ) {

            $this->id = $id;
            $this->titulo = $titulo;
            $this->pais = $pais;
            $this->director = $director;
            $this->generos = $generos;
            $this->ano = $ano;
        }

        
    }

?>