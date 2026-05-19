<?php
$tempre = $_POST ['tempre'];

$Fahrenheit = ($tempre * 9/5) + 32;

echo "<h1>Resultado de la conversion </h1>";
echo "Temperatura en Celsius: " . $tempre . " °C <br>";
echo "Temperatura en Fahrenheit: " . $Fahrenheit . " °F";
?>