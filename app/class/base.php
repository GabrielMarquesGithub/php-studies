<?php

class Base
{
    public $value;
    public const CONSTANT = "I'm a constant";

    public function setValue($value)
    {
        $this->value = $value;
    }
}

$instance = new Base();

// Usamos a sintaxe de seta para acessar métodos e propriedades
$instance->setValue("I'm a variable");
echo $instance->value . "<br>";

// Usamos a sintaxe de dois pontos para acessar constantes
echo $instance::CONSTANT . "<br>";
