<?php


// Ejemplo 1: Listar todos los archivos en
// un directorio, no es sensible a las mayusculas

$ruta = "Carpeta5";
$resultado = scandir($ruta);
var_dump($resultado);

echo "<br />";
echo "<hr />";

// imprimir los archivos sin puntos
foreach ($resultado as $archivo) {
    if ($archivo != "." && $archivo != "..") {
        echo $archivo;
        echo "<br />";
    }
}

echo "<br />";
$archivos = array_diff($resultado, [".", ".."]);
var_dump($archivos);

echo "<br />";
echo "<hr />";
/* Ejemplo 2: validar archivos en carpetas 
(Sin los puntos)*/
$ruta = "Carpeta6";
$resultado = scandir($ruta);

// foreach ($resultado as $archivo) {
//     if (is_file($ruta . "/" . $archivo)) {
//         echo $archivo;
//         echo "<br />";
//     }
// }


echo "<br />";
echo "<hr />";
// Verificar si el archivo existe
$archivoOrDirectorio = "exceptions.php";
// $archivoOrDirectorio = "Carpeta5";
if (file_exists(($archivoOrDirectorio))) {
    echo "El archivo o direcotrio existe";
    // validar si es un directorio 
    if (is_dir($archivoOrDirectorio)) {
        echo "<br />";
        echo "Es un DIRECTORIO";
    } else {
        echo "<br />";
        echo "Es un ARCHIVO";
    }
} else {
    echo "El archivo o directorio NO EXISTE";
}

// Metodos de archivo
// r -- read(lectura)
// w -- write(escritura)
// a -- append(adjuntar)
// Metodo 1

// Leer el contrenido Metodo 1:
$contenido = file_get_contents($archivoOrDirectorio);
echo "<hr />";
echo "<br />";
// Imprimir el contenido
echo $contenido;

echo "<hr />";
echo "<br />";

// Metodo 2
// Abrir archivo
$manejaArchivo = fopen($archivoOrDirectorio, "r");
$sizeFile = filesize($archivoOrDirectorio);
// Leer el contrenido
$contenido2 = fread($manejaArchivo, $sizeFile);

// Mostrar contenido
echo $contenido2;
// cerrar archivo
fclose($manejaArchivo);
