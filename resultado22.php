<?php

$dolares = $_POST['dolares'];

$euros = $dolares * 0.92;

echo "<h1>Cantidad en dólares: $$dolares</h1>";
echo "<h1>Equivalente en euros: €$euros</h1>";

?>