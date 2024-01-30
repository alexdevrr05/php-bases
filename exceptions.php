<?php

// try catch

echo "<br />";
// Ejemplo 1
function dividir($x, $y): int
{
    if ($y <= 0) {
        throw new Exception("Error, no es posible dividir entre 0");
    }

    $resultado = $x / $y;
    return $resultado;
}

try {
    echo dividir(10, 0);
} catch (Exception $e) {
    echo "Captura una excepcion: " . $e->getMessage();
    echo "<br />";
}
