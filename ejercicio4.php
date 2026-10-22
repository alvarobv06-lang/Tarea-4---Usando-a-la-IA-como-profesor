<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

    <?php include 'menu.php'; ?>

        <h2>Ejercicio 4: Clasificar Notas</h2>
        <hr>
        <form method="POST" action="">
            
                <label class="form-label">Introduce un número:</label>
                <input type="number" name="numero" class="form-control" required>
                <input type="number" name="numero" class="form-control" required>

            
            <button type="submit" class="btn btn-info">Calcular Tabla</button>
        </form>

<?php

// Creo la función que me pide el ejercicio
function clasificarNota($nota) {
    
    // Si  es menos de 5
    if ($nota < 5) {
        return "Suspenso";
    } 
    // si es mas de 5 se  comprueba  si esta entre 5 y 7
    elseif ($nota >= 5 && $nota < 7) {
        return "Aprobado";
    } 
    // si no e sningun de los anteriores esta comprovando  si esta entre 7 y 9
    elseif ($nota >= 7 && $nota < 9) {
        return "Notable";
    } 
    // Si no se ha uyilizado los demas es 9  es mas 
    else {
        return "Sobresaliente";
    }
}

?> 

</body>
</html>