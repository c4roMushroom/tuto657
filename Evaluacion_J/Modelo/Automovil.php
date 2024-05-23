<?php 
class Automovil 
{
    private $placa;
    private $marca;
    private $modelo;
    private $color;

    public function __construct($plac, $marc, $model, $colora)
    {
        $this->placa = $plac;
        $this->marca = $marc;
        $this->modelo = $model;
        $this->color = $colora;
    }

    public function obtenerPlaca()
    {
        return $this->placa;
    }
    public function obtenerMarca()
    {
        return $this->marca;
    }
    public function obtenerModelo()
    {
        return $this->modelo;
    }
    public function obtenerColor()
    {
        return $this->color;
    }
}