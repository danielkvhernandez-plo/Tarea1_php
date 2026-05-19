<?php

$precio = $_POST['precio'];

$iva = $precio * 0.13; // IVA del 13%
$total = $precio + $iva;

echo "<h2>Resultado</h2>";
echo "Precio del producto: $" . $precio . "<br>";
echo "IVA (13%): $" . $iva . "<br>";
echo "Total con IVA incluido: $" . $total;

?>