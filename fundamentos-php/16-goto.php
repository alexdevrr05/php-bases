<?php

/* 
    El operador goto puede ser usado para saltar
    a otra seccion en el programa. El punto de destino
    es especificado mediante una etiqueta seguida de dos
    puntos y la instruccion es dada como goto seguida
     de la etiqueta del destino desado. 
*/

echo "<br />";


// $edad = 21;
// if ($edad > 20) {
//     goto ingreso;
// } else {
//     goto error;
// }

// exit();
// ingreso:
// echo "Puede ingresar";
// echo "<br />";

// exit();
// error:
// echo "No puede ingresar";
// echo "<br />";


// Ejemplo 2
for ($i = 0; $i < 20; $i++) {
    if ($i == 12) {
        goto salto;
    }
}


exit();
salto:
echo "El valor actual es $i";
echo "<br />";
