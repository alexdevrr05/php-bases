<?php

echo "<br />";

// Ejercicio 1: (Recomendado) Imprimir numeros del 1 al 200;
// for ($num1 = 1; $num1 <= 200; $num1++) {
//     print $num1;
//     echo "<br />";
// }

// Ejercicio 2: Numeros impares hasta el 20
// for ($num2 = 1; $num2 <= 20; $num2++) {
//     if ($num2 % 2 == 1) {
//         print $num2;
//         echo "<br />";
//     }
// }

// Ejercicio 3: Tablas de multiplicar
for ($num3 = 1; $num3 <= 12; $num3++) {
    for ($num4 = 1; $num4 <= 10; $num4++) {
        print "$num4 x $num3 = " . $num3 * $num4;
        echo "<br />";
    }
    echo "<br />";
}
