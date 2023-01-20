<?php

include("../db.php");

$id = $_GET['id'];

$query = "DELETE FROM personal WHERE id = '$id'";
mysqli_query($conn, $query);

$_SESSION['mensaje'] = 'Eliminado correctamente';
$_SESSION['tipo_de_mensage'] = 'danger';
header("Location: ../personal.php");
