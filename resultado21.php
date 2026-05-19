<?php

$palabra = $_POST['palabra'];

$cantidad = strlen($palabra);

echo "<center>";
echo "<h1>La palabra ingresada es: $palabra</h1>";
echo "<h1>La cantidad de letras es: $cantidad</h1>";
echo "</center>";
?>