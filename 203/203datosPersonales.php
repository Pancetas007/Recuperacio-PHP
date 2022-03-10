<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activitat 203</title>
</head>
<body>

    <?php
        $datos = [
            "Nombre" => "Salvador",
            "Apellidos" => "Bolta Martil",
            "Email" => "saoro@gmail.com",
            "Año de nacimiento" => 2002,
            "Teléfono" => 675166167
        ];

        echo "<table border='1'>";
        foreach ($datos as $clave => $valor) {
            echo "<tr><td> $clave </td><td> $valor </td></tr>";
        }
        echo "</table>";
    ?>

</body>
</html>