<?php
// 1. Primero creo la variable con el número que me piden
$numero = 7;

for ($i = 1; $i <= 10; $i++) {
    
    $resultado = $numero * $i;
    
    // 4. Muestro la línea con el formato que pide el ejercicio
    // Uso el punto (.) para unir el texto con las variables
    echo $numero . " x " . $i . " = " . $resultado ; 
    
}
?>