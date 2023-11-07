<?php

class Calculadora
{
    private $valor1;
    private $valor2;
    private $operacion;
    private $resultado;

    public function __construct(
        $valor1 = 0,
        $valor2 = 0,
        $operacion = null,
        $resultado = 0
        )
    {
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
        $this->operacion = $operacion;
        $this->resultado = $resultado;
    }

    public function setValor1($valor1)
    {
        $this->valor1 = $valor1;
    }

    public function getValor1()
    {
        return $this->valor1;
    }

    public function setValor2($valor2)
    {
        $this->valor2 = $valor2;
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
    }

    public function resta()
    {
        $this->resultado = $this->valor1 - $this->valor2;
    }

    public function multiplicacion()
    {
        $this->resultado = $this->valor1 * $this->valor2;
    }

    public function division()
    {
        if ($this->valor2 != 0) {
            $this->resultado = $this->valor1 / $this->valor2;
        } else {
            echo "Error: No se puede dividir por cero.";
        }
    }

    public function potencia()
    {
        $this->resultado = pow($this->valor1, $this->valor2);
    }
}

?>
