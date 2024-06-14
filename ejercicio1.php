<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba PHP</title>
</head>

<body>
    <?php

    $registrado = 1;

    while ($registrado <= 5) {

        echo "<br> Ingresando datos..." . $registrado;
        $registrado++;
    }

    echo "<br> ¡Se ha registrado con exito los datos del paciente! ";
    ?>

</body>
</html>
