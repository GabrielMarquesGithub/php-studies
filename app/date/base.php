<?php

$d = date('d/M/Y');

echo $d . "<br>";

$dObject = new DateTime();

echo $dObject->format('d/M/Y') . "<br>";

// É possível modificar mais de um campo ao mesmo tempo
$dObject->modify('+3 day +2 months -3 years');
echo $dObject->format('d/M/Y H:i:s') . "<br>";

$timezone = new DateTimeZone('America/Sao_Paulo');

$dObject->setTimezone($timezone);

var_dump($dObject);
echo $dObject->format('d/M/Y H:i:s') . "<br>";
