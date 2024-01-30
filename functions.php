<?php

declare(strict_types=1);
/* Funciones en php
 function nombre_funcion(param1, param2) {}
*/

echo "<br />";

function sumaNumeros($num1, $num2)
{
    echo $num1 + $num2;
}


sumaNumeros(5, 10);
echo "<hr />";

// Imprimir numeros impares
function numerosImpares($tope)
{
    for ($i = 1; $i <= $tope; $i++) {
        if ($i % 2 == 1) {
            echo $i . "<br />";
        }
    }
}
// numerosImpares(50);

// Ejemplo 3
function suma($num1, $num2)
{
    return $num1 + $num2;
}

// $example = suma(5, 1042);
// echo $example;

echo suma(5, 1287);

echo "<br />";
// Ejemplo 3: Pasando parametros a funciones

function numerosimpares2(int $limite, $saltaNumero)
{
    for ($i = 1; $i <= $limite; $i++) {
        // Si el saltaNumero es igual a 3
        // por ejemplo, omite su impresion
        if ($i == $saltaNumero) {
            continue;
        }

        if ($i % 2 != 0) {
            echo "Numero impar $i";
            echo "<br />";
        }
    }
}


numerosimpares2(50, 3);

echo "<br />";
echo "<hr />";
// Retornar valores de funciones
function multiplica($x, $y): int
{
    return $x * $y;
}

echo "Resultado: " . multiplica(4, 4);

echo "<br />";
function arrayImpares($limite): array
{
    $retornaArray = [];
    for ($i = 0; $i < $limite; $i++) {
        if ($i % 2 != 0) {
            $retornaArray[] = $i;
        }
    }
    return $retornaArray;
}


$numsImpares = arrayImpares(20);
print_r($numsImpares);

echo "<br />";
// Ejemplo 4: Parametros por defecto y opcionales
function imprimirNumImpares3($limit, $saltaNumero = -1)
{
    for ($i = 1; $i <= $limit; $i++) {

        if ($i == $saltaNumero) {
            continue;
        }

        if ($i % 2 != 0) {
            echo "Numero impar $i";
            echo "<br />";
        }
    }
}

// imprimirNumImpares3(20, 3);
imprimirNumImpares3(20);

echo "<hr />";
// funciones dinamicas, se pueden llamar desde 
// una variable
function sumar3($x, $y): int
{
    echo "funciones dinamicas";
    echo "<br />";
    return $x + $y;
}

$funcionOperacion = "sumar3";
echo "<br />";
echo $funcionOperacion(3, 5);


echo "<br />";
// Funciones anonimas
$nombre = "Alejandro Ramirez Rodriguez";
$imprimirNombre = function () use ($nombre) {
    echo $nombre;
};

$imprimirNombre();

// Pasando argumentos como referencias

$total4 = 0;
function suma4($x, $y, &$total4 = null)
{
    $total4 = $x + $y;
}
echo "<br />";
echo $total4;
echo "<br />";

suma4(2, 4, $total4);
echo $total4;
