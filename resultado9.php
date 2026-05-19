<?php
$Numero = $_POST['Numero'];

if ($Numero % 2 == 0) {
    echo "El número $Numero es PAR";
} else {
    echo "El número $Numero es IMPAR";
}

?>