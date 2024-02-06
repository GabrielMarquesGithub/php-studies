<?php

interface BaseInterface
{
    public const VALUE = "I'm a constant";

    public function method1();
    public function method2($param);
}

class Base implements BaseInterface
{
    public function method1()
    {
        echo "Method 1 called. Constant VALUE: " . self::VALUE . "<br>";
    }

    public function method2($param)
    {
        echo "Method 2 called with parameter: $param<br>";
    }
}

$instance = new Base();
$instance->method1();
$instance->method2("I'm a parameter");
