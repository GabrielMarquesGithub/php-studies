<?php
class Carro
{
    public $marca;
    public $modelo;
    public $ano;
    public function __construct($marca, $modelo, $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }
    public function __toString()
    {
        return "Marca: $this->marca, Modelo: $this->modelo, Ano: $this->ano";
    }
}

$carro = new Carro("Volkswagen", "Gol", 2018);
