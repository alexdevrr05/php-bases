<?php

// definir el valor de una constante y su valor
define('CUOTA', 2000);

$valorCuota = CUOTA;
echo "<br />";
echo "El valor de la cuota es: $valorCuota";


// acceder con el metodo constant
echo "<br />";
echo constant('CUOTA');

// no podemos usar isset
// define('VERSION', '');
// echo isset(VERSION);

// TODO: buenas practicas con constante

// Mayusculas
define('NOMBRE', 'Alex Ramirez');

// No usar nombres de constante como
define('__VALOR__', 'valor');

// No usar nombres de constantes con guion bajo 
/* define('_valor', 'Valor') */

// Magic constants
echo "<br />";
echo "Te encuentras en la linea: " . __LINE__ . "<br />";
echo __DIR__;
