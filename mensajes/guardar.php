<?php

include('../db.php');

if (isset($_POST['Guardar'])) {
    $correo = $_POST['correo'];
    $nombre_R = $_POST['nombre_R'];
    $teléfono = $_POST['teléfono'];
    $asunto = $_POST['asunto'];
    $cuerpo_M = $_POST['cuerpo_M'];

    $query = "INSERT INTO mensajes(correo, nombre_R, teléfono, asunto, cuerpo_M) VALUES 
    ('$correo', '$nombre_R', '$teléfono', '$asunto', '$cuerpo_M')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("error");
    }

    $_SESSION['mensaje'] = 'guardado correctamente';
    $_SESSION['tipo_de_mensage'] = 'success';

    header("Location: ../mensaje.php");
}
