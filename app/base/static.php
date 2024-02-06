
<?php

function counter()
{
    $count = 0;
    $count++;

    echo $count . "<br>";
}

counter();
counter();
counter();

function counterStatic()
{
    static $count = 0;
    $count++;

    echo $count . "<br>";
}

counterStatic();
counterStatic();
counterStatic();
