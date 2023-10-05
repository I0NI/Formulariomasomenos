<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $csvFile = "alumnos.csv";
    $csvData = "$nombre,$apellido,$email\n";

    if (file_put_contents($csvFile, $csvData, FILE_APPEND | LOCK_EX)) {
        echo "Registro exitoso. Gracias por registrarte.";
    } else {
        echo "Error al registrar los datos.";
    }
}


