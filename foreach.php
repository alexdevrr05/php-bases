<?php

/* El ciclo foreach solo trabaja con arrays,
se puede usar para recorrer cada regstro
con su llave -> valor, key -> value 
*/

echo "<br />";
$colores = array("Blanco", "Rojo", "Azul");

// Ejercicio 1, accediendo a los valores
foreach ($colores as $valor) {
    echo "$valor <br />";
}


echo "<br />";
echo "<hr />";
// Ejercicio 2, accediendo a las llaves y los valores
$persona = array(
    "Alex" => "555",
    "Esmeralda" => "111",
    "Melissa" => "333",
    "Juanjo" => "777"
);

foreach ($persona as $key => $valor) {
    echo "$key => $valor" . "<br />";
}
