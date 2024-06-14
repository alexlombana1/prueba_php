<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // Este es el arreglo para las 5 personas
    $personas = array(
        array(
            "nombre" => "Alexander", "apellido" => "Pava", "tipo_id" => "CC",
        "ocupacion" => "Ingeniero", "hobbies" => array(
            "favoritos" => array("Programar", "Basketball"),
            "no_favoritos" => array("Danzar", "Videojuegos")
        )
        ),
        array(
            "nombre" => "Francisco", "apellido" => "Jimenez", "tipo_id" => "CC",
        "ocupacion" => "Desarrollador", "hobbies" => array(
            "favoritos" => array("Cantar", "Escribir"),
            "no_favoritos" => array("Bailar", "Estudiar")
        )
        ),
        array(
            "nombre" => "Mariana", "apellido" => "Ovalle", "tipo_id" => "TI",
        "ocupacion" => "Fotografa", "hobbies" => array(
            "favoritos" => array("Dibujar", "Estudiar"),
            "no_favoritos" => array("Cocinar", "Ejercitarse")
        )
        ),
        array(
            "nombre" => "Eduardo", "apellido" => "Bastidas", "tipo_id" => "TI",
        "ocupacion" => "Pintor", "hobbies" => array(
            "favoritos" => array("Pintar", "Ejercitarse"),
            "no_favoritos" => array("Estudiar", "Pescar")
        )
        ),
        array(
            "nombre" => "Julieth", "apellido" => "Hernandez", "tipo_id" => "CC",
        "ocupacion" => "Profesora", "hobbies" => array(
            "favoritos" => array("Enseñar", "Bailar"),
            "no_favoritos" => array("Cantar", "Leer")
        )
        ),
    );

    // Usaré una estructura repetitiva, en este caso el foreach para poder imprimir el nombre completo de cada persona
    echo "<hr>";
    $numero_p = 1;
    echo "<i><b>Nombre completo de cada persona: <br></b></i><hr>";
    foreach($personas as $persona){
        echo "Persona ". $numero_p . ": ". $persona["nombre"]. " ". $persona["apellido"]. "<br>";
        $numero_p++;
    }
    echo "<hr>";
    
    // Usaré una estructura condicional para poder contar las personas que tienen tipo de identificacion cc

    $cont_cc = 0;

    foreach($personas as $persona){
        if($persona["tipo_id"] == "CC"){
            $cont_cc++;
        }
    }

    echo "<b><i>El numero de personas que tienene documento tipo cc son: </i></b>" . $cont_cc;
    
    echo "<hr>";
    $numero_p = 0;
    //Voy a usar nuevamente el foreach para poder imprimir los hobbies favoritos
    echo "<i><b>Hobbies favoritos de cada persona: <br></b></i><hr>";
    foreach($personas as $persona){
        echo "El/Los hobbies favoritos de ". $persona["nombre"] . " " .$persona["apellido"]. " son ".implode(", ",$persona["hobbies"]["favoritos"]). "<br>";
        $numero_p++;
    }
    echo "<hr>";
    ?>
</body>
</html>
