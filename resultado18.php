<?php

$cliente = $_POST['cliente'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$subtotal = $cantidad * $precio;
$total = $subtotal;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factura</title>
</head>
<body>

    <h2>Factura de Compra</h2>

    <?php
        echo "<strong>Cliente:</strong> " . $cliente . "<br><br>";
        echo "<strong>Producto:</strong> " . $producto . "<br><br>";
        echo "<strong>Cantidad:</strong> " . $cantidad . "<br><br>";
        echo "<strong>Precio Unitario:</strong> $" . $precio . "<br><br>";
        echo "<strong>Subtotal:</strong> $" . $subtotal . "<br><br>";
        echo "<strong>Total a Pagar:</strong> $" . $total;
    ?>

</body>
</html>