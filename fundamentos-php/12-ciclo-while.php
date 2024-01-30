<?php

/*
while(condicion) {
    el codigo que se ejecuta
}
*/

// Ejercicio 1: Imprimir el numero del 1 al 30
// echo "<br />";
// $numero = 1;
// while ($numero <= 30) {
//     print $numero;
//     echo "<br />";
//     $numero++;
// }


// Ejercicio 2: numeros pares del 1 al 20
$numero2 = 1;
while ($numero2 <= 30) {
    if ($numero2 % 2 == 0) {
        print $numero2;
    }
    echo "<br />";
    $numero2++;
}
