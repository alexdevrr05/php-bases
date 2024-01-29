<?php

/* 
    do {
        codigo que se ejecuta
    } while(condition)
*/

echo "<br />";

$max = 50;
$num = 1;
// $num = 51;
do {
    /* Siempre entra al menos 1 
    vez aunque la condicion no se cumpla 
    con el while no se ejecuta si no se cumple
    la condicion */

    echo $num;
    $num *= 2;
    echo "<br />";
} while ($num <= $max);
