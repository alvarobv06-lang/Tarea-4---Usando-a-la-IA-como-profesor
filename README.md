# Tarea-4---Usando-a-la-IA-como-profesor
Tarea 4 


Ejercicio 1: Funciones con parámetros y return
Objetivo: Aprender a crear funciones reutilizables.

Enunciado:
Crea una función llamada calcularAreaRectangulo($base, $altura) que reciba dos números y devuelva el área. Luego, crea otra función mostrarResultado($base, $altura) que use la primera y muestre por pantalla un mensaje como:

text
El área de un rectángulo de base 5 y altura 3 es: 15
Pista: Usa return dentro de la primera función y echo en la segunda.

Ampliación: Añade una función calcularPerimetro($base, $altura) y muestra ambos resultados.

📗 Ejercicio 2: Trabajando con arrays
Objetivo: Recorrer arrays y hacer operaciones con ellos.

Enunciado:
Dado este array de notas:

php
$notas = [7, 4, 9, 6, 3, 10, 5];
Crea un script que:

Recorra el array con un foreach.

Muestre cada nota junto con un mensaje: "Aprobado" si es ≥ 5, o "Suspendido" si es < 5.

Al final, calcula y muestra el promedio de las notas.

Pista: Necesitarás una variable acumuladora ($suma = 0) y contar cuántos elementos tiene el array con count().

📙 Ejercicio 3: Arrays asociativos
Objetivo: Manejar arrays con claves personalizadas (muy usados en PHP real).

Enunciado:
Crea un array asociativo que represente a un alumno:

php
$alumno = [
    "nombre" => "Laura",
    "edad" => 22,
    "ciudad" => "Madrid",
    "notas" => [8, 7, 9]
];
Muestra por pantalla cada dato con un foreach, y al final calcula la nota media del alumno usando el subarray notas.

Pista: En un foreach sobre array asociativo, usa $clave => $valor. Para recorrer notas necesitarás otro foreach dentro o una función aparte.

Ampliación: Crea una función mostrarAlumno($alumno) que haga todo el trabajo.

📕 Ejercicio 4: Formularios + GET (primer contacto con el usuario)
Objetivo: Empezar a recibir datos desde el navegador con PHP.

Enunciado:
Crea dos archivos:

formulario.html

html
<form action="procesar.php" method="GET">
    <input type="text" name="nombre" placeholder="Tu nombre">
    <input type="number" name="edad">
    <button type="submit">Enviar</button>
</form>
procesar.php
Debe recoger los datos con $_GET, validar que no estén vacíos (empty()), y mostrar:

text
Hola Laura, tienes 22 años. Eres mayor de edad.


El prom que he utilizado 

Comportate como un profesor experto en PHP con más de 15 años de experiencia y dame ejercicios para aprender a programar en PHP, ya se hacer bucles 
y condicionales y me manejo con las variables, pasame al siguiente nivel con ejercicios sencillos para el aprendizaje que sean 4 ejercicios y que sean basicos

