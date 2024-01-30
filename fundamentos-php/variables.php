<?php
// Definiendo variables
$nombre = "Alejandro";

// Definicion de variables
$url = "www.google.com";
echo "<h2>Direccion: </h2>";
echo $url;
echo "<br />";

// Cambiando el valor de la variable
$url = "www.example.com\n";
echo "<br />";
echo $url;

// Varibles tipo string y concatenar
$apellidos = "Ramirez Rodriguez\n";
$mensaje = "mi primer string";
// echo $apellidos .  $mensaje;
print "$apellidos: $mensaje";
echo "<br />";

$estatura = 1.74;
echo "Estatura: $estatura";
echo "<br />";

// Sumar dos valores

$num1 = 5;
$num2 = 12;

$total = $num1 + $num2;
echo "Resultado de $num1 + $num2 = $total ";
echo "<br />";

// Introduccion rapida de la variables
function restar()
{
    $num5 = 10;
    $num6 = 1;

    $totalResta = $num5 - $num6;
    echo $totalResta;
}

restar();

function restar2()
{
    $num5 = 10;
    $num6 = 1;

    $totalResta = $num5 - $num6;
    echo '<br />';
    echo $totalResta;
}

// TODO: las variables en php es case-sensitive
// TODO: las funciones en php NO son case-sensitive

RESTAR2();

// Variables globales
global $mensaje;
$mensaje = "Saludo";

function mostrarContacto()
{
    global $mensaje;
    echo $mensaje;
}

echo "<br />";
mostrarContacto();
echo "<br />";
echo $mensaje;

// Variables estaticas
function contador()
{
    static $num = 1;
    echo $num;
    $num = $num + 1;
}

echo "<br />";

contador();
echo "<br />";
contador();
echo "<br />";
contador();
