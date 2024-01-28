<?php

/**
 * - Integers o enteros son numeros
 * - No contienen decimales 
 * - Pueden ser positivos o negativos
 * - Pueden contener numeros octales (base 8),
 * hexadecimales (base 16) y binarios (base 2)
 */

echo "<section>\n";
echo "    <h1>ENTEROS</h1>\n";
echo "    <p>* - Integers o enteros son numeros
 * - No contienen decimales 
 * - Pueden ser positivos o negativos
 * - Pueden contener numeros octales (base 8),
 * hexadecimales (base 16) y binarios (base 2)</p>\n";

// convertir string a entero
$puntaje = 120;
echo $puntaje;
echo "<br />";

echo "Convertir string a entero: \n";
$total = "50" + $puntaje;
echo $total;


echo "    <hr>\n";
echo "</section>\n";


echo "<section>\n";
echo "    <h1>DECIMALES</h1>\n";
echo "    <p>
 * - Son numeros reales
 * - Se escriben con punto (.)
 * - Se pueden redondear con el metodo round()
 * - Pueden ser negativos</p>\n";

$pagoTotal = 105.45;
echo $pagoTotal;
echo "<br />";
$saldoPendiente = -77.93;
echo $saldoPendiente;

echo "<br />";
// Redonder decimales
$puntaje = 503.22;
echo round($puntaje);

// Comparar decimales con precision 0.1
$precio = 1.54;
$estimado = 01.24;
echo "<br />";


$nombre2 = "Alejandro";
echo strlen($nombre2);
