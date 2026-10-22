<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

    <?php include 'menu.php'; ?>

   
        <h2>Tabla de multiplos</h2>
        <hr>
    <form method="POST" action="">
          
                <label class="form-label">Introduce un número:</label>
                <input type="number" name="numero" class="form-control" required>
         
            <button type="submit" class="btn btn-primary">Calcular Tabla</button>
        </form>
            
            <?php
            // 1. Primero creo la variable con el numero que me piden
            $numero = 7;

            for ($i = 1; $i <= 10; $i++) {

                $resultado = $numero * $i;

                // 4. Muestro la linea con el formato que pide el ejercicio
                // Uso el punto (.) para unir el texto con las variables
                echo " x " . $i . " = " . $resultado ;
            }
            ?>

  

</body>
</html>