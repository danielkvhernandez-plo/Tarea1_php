<?php

$numero = $_POST['numero'];

$suma = 0;

for($i = 1; $i <= $numero; $i++) {
    $suma = $suma + $i;
}

echo "<center>";
echo "La suma de los números desde 1 hasta $numero es: $suma";
echo "</center>";
?>