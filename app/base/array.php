<?php

// Criado array
$array = [];
// Adicionando valor ao array
$array[0] = "Hello";

// Criado array
$associativeArray = [];
// Adicionando valor ao array
$associativeArray["message"] = "Hello";

// Criado array
$array = [];
// Adicionando valor ao final do array
$array[] = "World";

// Associative array
$carro = ["marca" => "Volkswagen", "modelo" => "Gol", "ano" => 2019];
print_r($carro);
$moto = array("marca" => "Honda", "modelo" => "CG", "ano" => 2018);

// Criando array rapidamente
// Array com 10 elementos, de 1 a 10 indo de 2 em 2
$numbers = range(1, 10, 2);

// Obtains the number of elements in an array
$size = count($numbers);

// Use list to assign values to multiple variables
// O list funciona como um destructuring do JS
list($first, $second, $third) = $numbers;
