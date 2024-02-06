<?php
function filterobject($array)
{
    $result = [];
    foreach ($array as $key => $value) {
        if ($value > 10) {
            $result[$key] = $value;
        }
    }
    return $result;
}

var_dump(filterobject(["bala" => 5, "pirulito" => 15, "doce" => 10, "chocolate" => 12]));
