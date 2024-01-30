<?php

echo "<br />";


// Definiendo un array
$numerosArr = [1, "React", 555, "Cerdo"];
// Funcion para imprimir arays
var_dump($numerosArr);
echo "<br />";
// Mas legible
print_r($numerosArr);
echo "<br />";

echo $numerosArr[1];
echo "Cantidad de elementos: " . count($numerosArr);
echo "<br />";

for ($i = 0; $i < count($numerosArr); $i++) {
    echo $numerosArr[$i];
    echo "<br />";
}


// Acceder a un elemento de array con una constante
const ELEMENTO = 2;

echo "{$numerosArr[ELEMENTO]}";

echo "<br />";
// Cambiar los elementos de un array
print_r($numerosArr);
echo "<br />";
echo $numerosArr[0] = "Example";
echo "<br />";
print_r($numerosArr);

echo "<br />";

$ejemploArr = ["Juanjo", 5, 243.2, true];
print_r($ejemploArr);

echo "<hr />";
$meses = [
    "Enero",
    "Febrero", "Marzo",
    "Abril", "Mayo", "Junio",
    "Julio", "Agosto", "Septiembre",
    "Octubre", "Noviembre", 12
];

$contador = 0;

foreach ($meses as $valor) {
    echo "[$contador] => $valor";
    echo "<br />";
    $contador++;
}

$nombres = [];
echo count($nombres);
echo "<br />";
var_dump($nombres);
echo "<br />";
print_r($nombres);

echo "<br />";
// Validar un array vacio
if (empty($nombres)) {
    echo "El array esta vacio";
}


echo "<hr />";
// Agregar otro array a la posicion 0
$nombres[0] = ["Alex"];
var_dump($nombres);
echo "<hr />";
// Resetear array
$nombres[0] = [];
var_dump($nombres);

echo "<hr />";
// Array dentro de otro array
$array2 = [[]];
var_dump($array2);

echo "<hr />";
// Array asociativos
$meses2 = [
    1 => "Enero", "Feb" => "Febrero", 3 => "Marzo",
    4 => "Abril", 5 => "Mayo", 6 => "Junio",
];

// Recorrer array asociativo
foreach ($meses2 as $key => $valor) {
    echo "[$key] => $valor";
    echo "<br />";
}


echo "<br />";
// Array multidimensional
$arrayMultidimensional = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8]
];

var_dump($arrayMultidimensional);

// Se convierte a una dimension,
// se imprimen los valores por separado

echo "<br />";
echo "<hr />";
foreach ($arrayMultidimensional as $unaDimension) {
    var_dump($unaDimension);
}

echo "<br />";
echo "<hr />";
foreach ($arrayMultidimensional as $unaDimension) {
    echo "[";
    foreach ($unaDimension as $valor) {
        echo "$valor, ";
    }
    echo "]";
    echo "<br />";
}
