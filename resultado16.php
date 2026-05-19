<?php

$nombre = $_POST['nombre'];
$horas = $_POST['horas'];
$pago = $_POST['pago'];

$salario = $horas * $pago;

echo "<h1>Resultado</h1>";

echo "Empleado: " . $nombre . "<br>";
echo "Horas trabajadas: " . $horas . "<br>";
echo "Pago por hora: $" . $pago . "<br>";
echo "Salario total: $" . $salario;

?>