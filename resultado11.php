<?php
$nota1= $_POST ['nota1'];
$nota2= $_POST ['nota2'];
$nota3= $_POST ['nota3'];

if ($nota1 >= 6 && $nota2 >= 6 && $nota3 >= 6) {
    echo "Resultado: Aprobado";
} else {
    echo "Resultado: Reprobado";
}
?>