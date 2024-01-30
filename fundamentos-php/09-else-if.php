<?php

// Ejercicio 1
$num1 = 5;
$num2 = 8;


if ($num1 > $num2) {
    echo "$num1 es MAYOR que $num2";
} else if ($num1 == $num2) {
    echo "$num1 es IGUAL que $num2";
} else {
    echo "$num1 es MENOR que $num2";
}

$a = true;
$b = true;
$c = true;

// TODO: CON EL PRIMERO QUE SE CUMPLA YA NO 
// SIGUE EJECUTANDOSE
echo "<br />";
if ($a == true) {
    echo "a: $a";
} else if ($b == true) {
    echo "b: $b";
} else {
    echo "c: $c";
}

echo "<br />";
if ($a == true) {
    echo "a: $a";
}

echo "<br />";
if ($b == true) {
    echo "b: $b";
}

echo "<br />";
if ($c == true) {
    echo "c: $c";
}
