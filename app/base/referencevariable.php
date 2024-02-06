<?php 
$a = "valor";
 // $b é uma referência para $a ou seja elas referenciam o mesmo espaço de memória
 // caso uma seja alterada a outra também será
$b = &$a;

$a = "novo valor <br>";

echo $b;

$b = "novo valor 2";

echo $a;
?>