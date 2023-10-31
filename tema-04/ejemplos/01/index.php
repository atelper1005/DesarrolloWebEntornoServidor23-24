<?php

    /*
    
        Programación Orientada a Objetos
        Ejemplo 1. Creacion clase con encapsulamiento
    
    */

    class Vehiculo {
        private $modelo;
        private $nombre;
        private $velocidad;
        private $matricula;

        public function __construct() {

            $this->modelo = null;
            $this->nombre = null;
            $this->velocidad = 0;
            $this->matricula = null;
        }

         #Setters
    //Modificar los valores de los atributos de un objeto
    
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setVelocidad($velocidad) {
        $this->velocidad = $velocidad;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    #Getters
    //Obtener los valores asignados a los atributos de un objeto

    public function getModelo($modelo) {
        return $this->modelo;
    }

    public function getNombre($nombre) {
        return $this->nombre;
    }

    public function getVelocidad($velocidad) {
        return $this->velocidad;
    }

    public function getMatricula($matricula) {
        return $this->matricula;
    }

    }

?>