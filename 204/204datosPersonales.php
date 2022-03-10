<?php

    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellidos"];
    $email = $_GET["email"];
    $año = $_GET["año"];
    $telefono = $_GET["telefono"];

    $datos = [
        "Nombre" => $nombre,
        "Apellidos" => $apellido,
        "Email" => $email,
        "Año" => $año,
        "Telefono" => $telefono
    ];

    echo "<table border='1'>";
    foreach ($datos as $clave => $valor) {
        echo "<tr><td> $clave </td><td> $valor </td></tr>";
    }
    echo "</table>";