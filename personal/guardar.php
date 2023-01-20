<?php

include('../db.php');

if (isset($_POST['Guardar'])) {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $dirección = $_POST['dirección'];

    $query = "INSERT INTO personal(nombres, apellidos, cedula, telefono, dirección) VALUES 
    ('$nombres', '$apellidos', '$cedula', '$telefono', '$dirección')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("error");
    }

    $_SESSION['mensaje'] = 'guardado correctamente';
    $_SESSION['tipo_de_mensage'] = 'success';

    header("Location: ../personal.php");
}
