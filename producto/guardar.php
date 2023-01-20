<?php

include('../db.php');

if (isset($_POST['Guardar'])) {
    $nombre = $_POST['nombre'];
    $códico = $_POST['código'];
    $descripción = $_POST['descripción'];
    $foto = $_POST['foto'];

    $query = "INSERT INTO producto(nombre, código, descripción, foto) VALUES 
    ('$nombre', '$códico', '$descripción', '$foto')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("error");
    }

    $_SESSION['mensaje'] = 'guardado correctamente';
    $_SESSION['tipo_de_mensage'] = 'success';

    header("Location: ../producto.php");
}
