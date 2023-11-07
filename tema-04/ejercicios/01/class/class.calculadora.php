<?php

class Calculadora
{
    private $valor1;
    private $valor2;
    private $operacion;
    private $resultado;

    public function __construct()
    {
        $this->valor1 = 0;
        $this->valor2 = 0;
        $this->operacion = null;
        $this->resultado = 0;
    }

    public function setValor1($valor)
    {
        $this->valor1 = $valor;
    }

    public function getValor1()
    {
        return $this->valor1;
    }

    public function setValor2($valor)
    {
        $this->valor2 = $valor;
    }

    public function getValor2()
    {
        return $this->valor2;
    }

    public function setOperacion($operacion)
    {
        $this->operacion = $operacion;
    }

    public function getOperacion()
    {
        return $this->operacion;
    }

    public function getResultado()
    {
        return $this->resultado;
    }

    public function suma()
    {
        $this->resultado = $this->valor1 + $this->valor2;
        $this->operacion = 'Suma';
    }

    public function resta()
    {
        $this->resultado = $this->valor1 - $this->valor2;
        $this->operacion = 'Resta';
    }

    public function multiplicacion()
    {
        $this->resultado = $this->valor1 * $this->valor2;
        $this->operacion = 'Multiplicación';
    }

    public function division()
    {
        if ($this->valor2 != 0) {
            $this->resultado = $this->valor1 / $this->valor2;
            $this->operacion = 'División';
        } else {
            echo "Error: No se puede dividir por cero.";
        }
    }

    public function potencia()
    {
        $this->resultado = pow($this->valor1, $this->valor2);
        $this->operacion = 'Potencia';
    }
}

?>
