<?php

echo "<br />";

echo "<h1> Break </h1>";

$num = 1;
do {
    echo $num;
    echo "<br />";
    // Rompe el bucle infinito
    if ($num >= 10) {
        break;
    }

    $num++;
    // Para crear bucle infinito
} while (true);


echo "<h1> Continue </h1>";
/* continue: se salta a la siguiente 
    linea y avanza hacia el proximo ciclo o loop
*/

$num2 = 1;

while (true) {
    $resultado = $num2 % 2;
    if ($resultado == 1) {
        $num2++;
        continue;
    }

    if ($num2 > 10) {
        break;
    }

    echo "PARES $num2";
    echo "<br />";
    $num2++;
}
