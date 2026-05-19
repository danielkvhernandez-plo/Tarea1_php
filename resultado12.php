<?php
$Base= $_POST ['Base'];
$Altura= $_POST ['Altura'];

$Area = $Base * $Altura;
 echo "<center>";
echo "<h1> Resultado </h1>";
echo "La Base es: " . $Base;
echo "<br><br>";
echo "La Altura es: " . $Altura;
echo "<br><br>";
echo "El Area del resctangulo es: " . $Area;
echo "<br><br>";
echo "<button onclick=\"window.location.href='Ejercicio12.html'\">Salir</button>";
echo "</center>";
?>