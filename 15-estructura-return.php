<?php
echo "<br />";

// Ejercicio 1: return 
function validateUser($email)
{
    if (empty($email)) {
        echo "El email es obligatorio";
        return;
    }

    switch ($email) {
        case 'example@gmail.com':
            echo "Bienvenido Alex!";
            break;
        case 'user@gmail.com':
            echo "Bienvenido Invitado";
            break;
        default:
            echo "User not found";
    }
}


validateUser('');
echo "<br />";
// validateUser('user@gmail.com');
echo "<br />";
