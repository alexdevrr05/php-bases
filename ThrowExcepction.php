<?php

function manejador_errores_personalizado($excepcion)
{
    echo "Excepcion capturada: " . $excepcion->getMessage();
}

set_exception_handler("manejador_errores_personalizado");

// No hay necesidad de usar try catch
// Ejemplo 1
// throw new Exception("ERROR, ha ocurrido una division por 0");
// Ejemplo 2
function dividir($x, $y): int
{
    if ($y <= 0) {
        throw new Exception("Error, no es posible dividir entre 0");
    }

    $resultado = $x / $y;
    return $resultado;
}

echo "Resultado de la division: " . dividir(10,  0);
