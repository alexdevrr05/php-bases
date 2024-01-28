<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Negra</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body>
    <h1>Ejercicios de la seccion 9</h1>
    <h1>Escribe un programa en PHP que determine la calificación de un estudiante según su puntaje.</h1>

    <p>Utiliza la variable $nota para almacenar el puntaje del estudiante. Puedes cambiar el valor de $nota para probar diferentes puntajes.</p>

    <p>Utiliza condicionales if, else if y else para determinar la calificación basada en el siguiente criterio:</p>

    <ul>
        <li>Si la nota es mayor o igual a 90, muestra "Calificación: A".</li>
        <li>Si la nota es mayor o igual a 80 pero menor que 90, muestra "Calificación: B".</li>
        <li>Si la nota es mayor o igual a 70 pero menor que 80, muestra "Calificación: C".</li>
        <li>Si la nota es mayor o igual a 60 pero menor que 70, muestra "Calificación: D".</li>
        <li>Si la nota es menor que 60, muestra "Calificación: F".</li>
    </ul>

    <p>Completa las partes marcadas con comentarios en el código para que el programa muestre la calificación correcta según la nota proporcionada.</p>

    <p>Prueba el programa con diferentes valores de nota para asegurarte de que las calificaciones se muestren correctamente.</p>
</body>

</html>

<?php

$nota = 85;


if ($nota >= 90) {
    echo "Calificación: A";
} else if ($nota >= 80 && $nota < 90) {
    echo "Calificación: B";
} else if ($nota >= 70 && $nota < 80) {
    echo "Calificación: C";
} else if ($nota >= 60 && $nota < 70) {
    echo "Calificación: D";
} else {
    echo "Calificación: F. Estás reprobado";
}
