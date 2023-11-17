<?php

    /*
    
        Clase Alumno
    
    */

    class Alumno {
        public $id;
        public $nombre;
        public $apellidos;
        public $email;
        public $fecha_nacimiento;
        public $curso;
        public $asignaturas;

        public function __construct(
            $id = null,
        $nombre = null,
        $apellidos = null,
        $email = null,
        $fecha_nacimiento = null,
        $curso = null,
        $asignaturas = []) {
            
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->email = $email;
            $this->fecha_nacimiento = $fecha_nacimiento;
            $this->curso = $curso;
            $this->asignaturas = $asignaturas;
        }

        
/*
        public function getEdad() {
                setlocale(LC_TIME, 'es_ES');

                $fechaNacimiento = new DateTime($this->fecha_nacimiento);
                $hoy = new DateTime();

                $edad = $fechaNacimiento->diff($hoy)->y;
                return $edad;
        }

        */

        function getEdad() {
            $fechaNacimiento = DateTime::createFromFormat('d/m/Y', $this->fecha_nacimiento);
            $hoy = new DateTime();
            $edad = $hoy->diff($fechaNacimiento)->y;
            return $edad;
        }
    }

?>