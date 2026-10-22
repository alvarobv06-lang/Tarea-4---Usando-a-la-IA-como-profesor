<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">

    <a href="index.php" class="btn btn-secondary mb-3">← Volver al menú</a>

    <div class="card p-4">
        <h2>Pares e Impares (del 1 al 20)</h2>
        <hr>
        

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

 </div>

</body>
</html>

