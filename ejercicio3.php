<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//Cree una funcion para poder realizar el calculo de las dosis recibiendo los parametros correspondientes
function calcularDosis($peso, $altura, $sexo){

    $dosis = 0.0;

    if ($sexo == "hombre"){
        if($altura > 1.60 && $peso >= 150){
            $dosis = (0.20 * $altura) + (0.80 * $peso);
        } else {
            $dosis = (0.30 * $altura ) + (0.70 * $peso);
            
        }
    } elseif ($sexo == "mujer"){
        if($altura > 1.50 && $peso >= 130){
            $dosis = (0.25 * $altura) + (0.75 * $peso);
        }else {
            $dosis = (0.35 * $altura) + (0.65 * $peso);
        }
    }
    return $dosis;
}

$pacientes = array(
    array(
        "nombre" => "Juan",
        "apellido" => "Perez",
        "peso" => 150,
        "altura" => 1.60,
        "sexo" => "hombre",
        "dosis" => calcularDosis(150, 1.60, "hombre")
    ),
    array(
        "nombre" => "Alejandro",
        "apellido" => "Martinez",
        "peso" => 170,
        "altura" => 1.80,
        "sexo" => "hombre",
        "dosis" => calcularDosis(170, 1.80, "hombre")
    )
);

foreach ($pacientes as $paciente){

    echo "La dosis del paciente ". $paciente['nombre']. " ". $paciente['apellido']
    . " es de ". $paciente['dosis']. "g<br>";
}

?>
    
</body>
</html>
