<?php

// Ejercicio 1 if

$edad = 17;

// if ($edad >= 18) {
//     echo "Puede ingresar al antro, senor";
// } else {
//     echo "No cumples la edad para ingresar al antro";
// }

// $edad = 18;
// Ejercicio 2 if
// $indentificacion = true;
// if ($edad >= 18 && $indentificacion) {
//     echo "<p style='color: green'>Puedes ingresar<p/>";
// } else {
//     echo "<p style='color: red'>No puedes ingresar<p/>";
// }

// Ejercicio 3
// $nombreCompleto = "Alejandro Ramirez";
// if (!is_null($nombreCompleto)) {
//     echo "Nombre no está vacío";
// } else {
//     echo "El nombre está vacío";
// }

// Ejercicio 4
// $nombreCompleto = "";
// if (!$nombreCompleto != "") {
//     echo "El nombre está vacío";
// } else {
//     echo "Nombre no está vacío";
// }

// // Ejercicio 4
// $nombreCompleto = "Alex";
// if (!empty($nombreCompleto)) {
//     echo "Nombre no está vacío";
// } else {
//     echo "El nombre está vacío";
// }

// Ejercicio 5 - Validar el tipo de dato
// $edad = 22;
// if ($edad == "22") {
//     echo "INGRESA";
// } else {
//     echo "NO INGRESA";
// }
$edad = 22;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mezclar PHP con HTML</title>
</head>

<body>
    <!-- Opcion 1 -->
    <?php if ($edad == "22") { ?>
        <h2>INGRESA</h2>
    <?php } else { ?>
        <h2>NO INGRESA</h2>
    <?php } ?>

    <!-- Opcion 2 -->
    <?php if ($edad == "22") : ?>
        <h2>INGRESA</h2>
    <?php else : ?>
        <h2>NO INGRESA</h2>
    <?php endif ?>
</body>

</html>