<?php

trait BaseTrait
{
    public function traitPublicMethod()
    {
        echo "This is a public method from the trait." . "<br>";
    }
    private function traitPrivateMethod()
    {
        echo "This is a private method from the trait." . "<br>";
    }
    protected function traitProtectedMethod()
    {
        echo "This is a protected method from the trait." . "<br>";
    }
}

class BaseClass
{
    use BaseTrait;

    public function classPublicMethod()
    {
        echo "This is a method from the base class." . "<br>";
    }

    public function classAnotherMethod()
    {
        echo "This is a another method from the base class." . "<br>";
        $this->traitPrivateMethod();
    }
}

class BaseClassChild extends BaseClass
{
    public function classChildPublicMethod()
    {
        echo "This is a method from the child class." . "<br>";
        $this->traitProtectedMethod();
    }
}

// Create an instance of BaseClass
$instance = new BaseClass();
echo $instance->classPublicMethod();
echo $instance->traitPublicMethod();
echo $instance->classAnotherMethod();
