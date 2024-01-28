<?php

// Práctica Expresiones y Operadores en PHP

// TODO: Área de un Triángulo
$baseTriangulo = 8;
$alturaTriangulo = 6;
echo "<h3 style='padding-top: 1rem: margin: 0px;'>#1. Área de un triangulo</h3>";
$areaTriangulo = 1 / 2 * $baseTriangulo * $alturaTriangulo;
echo "El area del triangulo es: $areaTriangulo";

// TODO: Descuento en un compra
$precioProducto = 700;
$descuentoPorcentaje = 0.30;
$precioConDescuento = $precioProducto - ($precioProducto * $descuentoPorcentaje);
echo "<h3 style='padding-top: 1rem: margin: 0px;'>#2. Precio con descuento</h3>";
echo "Precio con descuento: $precioConDescuento";


// TODO: Verificar si un numero es par o impar
$numero = 4;
// módulo "%" devuelve el residuo de la division entre el numero que esté a su derecha
$esPar = ($numero % 2 == 0) ? true : false;
echo "<h3 style='padding-top: 1rem: margin: 0px;'>#3. Verificar si un Número es Par o Impar:</h3>";
echo "El numero es par: " . ($esPar ? "Sí" : "No");
echo "<br />";


// TODO: Concatenacion de texto
$name = "Alejandro";
$lastname = "Ramirez";

echo "<h3 style='padding-top: 1rem: margin: 0px;'>#4. Concatenacion de texto</h3>";
$nombreCompleto = "$name $lastname";
echo "Nombre completo: " . $nombreCompleto;
