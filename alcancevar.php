<!DOCTYPE html>
<html>
<body>

<?php
$x = 5; // entorno global
 
function Prueba() {
    // Genera un error por el alcance de la variable
    echo "<p>Variable x dentro de la funci�n: $x </p>";
} 
Prueba();

echo "<p>Variable x fuera de la funci�n: $x</p>";
?>

</body>
</html>