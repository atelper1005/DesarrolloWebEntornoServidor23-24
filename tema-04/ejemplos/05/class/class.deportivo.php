<?php

    /*
    
        clase Deportivo, subclase de Vehiculo
    
    */

    class Deportivo extends Vehiculo {
		private $cilindrada;
		private $km;

		public function __construct($cilindrada = null, $km = null) {
			$this->cilindrada = $cilindrada;
			$this->km = $km;
		}
}

?>