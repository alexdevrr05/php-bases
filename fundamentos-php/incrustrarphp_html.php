<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP</title>

    <script>
        <?php

        echo "alert('Estoy aprendiendo PHP')"

        ?>
    </script>
</head>

<body>
    <h2>Incrustrando php en html</h2>
    <?php echo "Ejemplo"; ?>

    <?php
    print "<h4>Titulo h4</h4>";
    echo "<hr />"
    ?>

    <h4>
        <?php
        print "Titulo h4";
        ?>
    </h4>

    <h3 style="color: blue;">Texto azul</h3>

    <h2 <?php echo 'style="color: blue;" ' ?>>Texto azul pero con php</h2>

</body>

</html>