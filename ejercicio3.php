<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
        <h2>Calculadora de Funciones</h2>

    <form method="POST" action="">
  
            <label class="form-label">Número 1:</label>
            <input type="number" name="num1" class="form-control" step="any" required>
       
            <label class="form-label">Número 2:</label>
            <input type="number" name="num2" class="form-control" step="any" required>
     
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

    <?php include 'menu.php'; ?>

        <h2>Ejercicio 3: Funciones</h2>
        <hr>

        <?php
        // Tus funciones originales (intactas)
        function sumar($a, $b) {
            return $a + $b;
        }

        function restar($a, $b) {
            return $a - $b;
        }

        function multiplicar($a, $b) {
            return $a * $b;
        }

        function dividir($a, $b) {

        
            return $a / $b;
        }
       ?>
    

</body>
</html>