<?php
$sumaPares = 0;
$cuentaImpares = 0;

for ($i = 1; $i <= 20; $i++) {
    
    if ($i % 2 == 0) {
        $sumaPares = $sumaPares + $i; 
        echo "El $i es par<br>";
    } else {

        $cuentaImpares = $cuentaImpares + 1;
        echo "El $i es impar<br>";
    }
}

echo "<br>Suma de pares: " , $sumaPares , "<br>";
echo "Total de impares: " , $cuentaImpares;

?>