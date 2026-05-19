<?php
$Num1 = $_POST ['Num1'];
$Num2 = $_POST ['Num2'];

if ($Num1 < $Num2) {
    echo "El Numero menor es: " . $Num1;

} elseif ($Num2 < $Num1) {
    echo "El Numero menor es: " . $Num2;

} else {
    echo "Los dos Numeros son iguales";

}
?>