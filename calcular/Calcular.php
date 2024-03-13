<?php

class Calcular
{
    private $valor1;
    private $valor2;
    private $resultado;

    public function setValor1($valor1)
    {
        $this->valor1 = $valor1;
    }
    public function setValor2($valor2)
    {
        $this->valor2 = $valor2;
    }
    public function getValor1()
    {
        return $this->valor1;
    }
    public function getValor2()
    {
        return $this->valor2;
    }
    public function getResultado()
    {
        return $this->resultado;
    }

    public function soma()
    {
        $this->resultado = $this->valor1 + $this->valor2;
        return $this->resultado;
    }
    public function subtracao()
    {
        $this->resultado = $this->valor1 - $this->valor2;
        return $this->resultado;
    }
    public function multi()
    {
        $this->resultado = $this->valor1 * $this->valor2;
        return $this->resultado;
    }
    public function divi()
    {
        $this->resultado = $this->valor1 / $this->valor2;
        return $this->resultado;
    }
}
