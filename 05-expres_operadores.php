<?php

// Ejemplo de expresion
$nombre = "Alejandro";
$salario = 15000;
// $total = suma(10, 20);

/**  El "=" es un operacion de asignacion, los operadores 
 * se usan para realizar operaciones sobre las variables */
$apellido = "Ramirez";
// $x++;
$suma = 3 + 5;

// Diferentes tipos de operadores 

// TODO: Aritmeticos
$sueldo = 15000;
$oficio = "Web developer";
$salud = 100;
$pension = 50000;
$ingresos = $sueldo + $pension;
echo "<br />";
echo "Los ingresos tienen valor de: $ingresos";

// Calcular el area de un rectangulo 
$base = 10;
$altura = 14;
$area = $base * $altura;
echo "<br />";
echo "El area del rectangulo es: $area m2";

// Porcentaje
echo "<br />";
$sumaNotas = 42;
$cantidadMaterias = 5;
$promedio = $sumaNotas / $cantidadMaterias;
echo "Porcentaje (calificacion): $promedio";

echo "<br />";
// Modulo
$a = 50 % 2;
echo "Resultado del modulo: $a";


// Exponenciacion
$c = 4;
$d = 3;

$resultadoExpo = $c ** 2;
echo "<br />";
echo "Exponenciacion (a la 2): $resultadoExpo";
echo "<br />";
$resultadoExpo2 = $c ** $d;
echo "Exponenciacion (a la $d): $resultadoExpo2";


// Operadores condicionales
$puedeIngresar = (true) ? "ENTRA" : "NO ENTRA";
echo "<br />";
echo "Operador ternario: $puedeIngresar";

// Operadores logicos and or %% ||
$permiso = true;
$autenticado = true;
echo "<br />";
echo ($permiso  && $autenticado) ? "Bienvenido, administrador" : "Bienvenido, invitado";

echo "<br />";
$total = 50;
$minAprobatorio = 70;
$isAprobado = ($total >= $minAprobatorio) ? "Aprobado" : "Reprobado";

echo "Alumno: $nombre";
echo "<br />";
echo "Total: $total, Mínimo Aprobatorio: $minAprobatorio, Status: $isAprobado";

echo "<br />";
// .= 
$nombreCompleto = "Alejandro";
$nombreCompleto .= " Ramirez";
$nombreCompleto .= " Rodriguez";
echo "Nombre completo con operador \".=\" $nombreCompleto";


echo "<br />";
// Operadores de incremento
$conta = 20;
$conta += 1;
echo "Operadores de incremento: $conta";

echo "<br />";
// Post incremento
$conta++;
echo "<h3 style='margin: 0px;'>Post incremento</h3>";
echo $conta;

echo "<br />";
// Pre incremento (colocando el operador ++ antes de la variable)
echo "<h3 style='margin: 0px;'>Pre incremento</h3>";
echo ++$conta;


echo "<br />";
// Presedencia de operadores 
echo "<h3 style='margin: 0px;'>Presedencia de operadores </h3>";
$val = 20;
echo $val++;
/** TODO: le da mas importancia a "= $val" antes que 
 * al operador "++" por eso se ve que no incrementa   */
$contador = $val++;

echo "<br />";
echo $contador; // pensaríamos en 22 pero es 21
echo "<br />";
echo $val;


echo "<h3 style='margin: 0px;'>Presedencia de operadores (ejemplo 2) </h3>";
echo "<br />";
$resultado1 = false && false;

$resultado2 = true and false;

echo "Cuando usamos '&&' tiene prioridad el lado derecho:";
echo "<br />";
echo ($resultado1) ? "verdadero" : "falso";
echo "<br />";
echo "Cuando usamos 'and' tiene prioridad lo que se encuentre primero del lado derecho: ";
echo "<br />";
echo ($resultado2) ? "veradero" : "falso";
