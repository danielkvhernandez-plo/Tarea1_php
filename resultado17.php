<?php

$monto = $_POST['monto'];

if ($monto > 100) {
    
    $descuento = $monto * 0.10;
    $total = $monto - $descuento;

    echo "<h1>Resultado de la Compra</h1>";
    echo "Monto original: $" . $monto . "<br>";
    echo "Descuento aplicado: $" . $descuento . "<br>";
    echo "Total a pagar: $" . $total;

} else {

    echo "<h1>Resultado de la Compra</h1>";
    echo "No aplica descuento.<br>";
    echo "Total a pagar: $" . $monto;

}

?>