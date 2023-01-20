<?php

include_once 'apipersonal.php';

$api = new apipersonal();

if (isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['cedula']) && isset($_POST['telefono']) && isset($_POST['dirección'])) {
} else {
    $api->error('Error al llamar la API');
}
