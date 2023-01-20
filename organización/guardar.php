<?php

include('../db.php');

if (isset($_POST['Guardar'])) {
    $nombre_organizacion = $_POST['nombre_organizacion'];
    $foto = $_POST['foto'];
    $descripción = $_POST['descripción'];
    $misión = $_POST['misión'];
    $visión = $_POST['visión'];
    $valores = $_POST['valores'];

    $query = "INSERT INTO organización(nombre, foto, descripción, misión, visión, valores) VALUES 
    ('$nombre_organizacion', '$foto', '$descripción', '$misión', '$visión', '$valores')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("error");
    }

    $_SESSION['mensaje'] = 'guardado correctamente';
    $_SESSION['tipo_de_mensage'] = 'success';

    header("Location: ../index.php");
}
