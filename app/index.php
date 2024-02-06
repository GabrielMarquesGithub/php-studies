<?php
$str = "Hello, World! I'm a good guy";

echo $str . "<br>";

echo strlen($str) . "<br>";

$strArray = str_split($str);
foreach ($strArray as $key => $value) {
    echo $key . $value . "<br>";
}
