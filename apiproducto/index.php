<?php

include_once 'apiproducto.php';

$api = new apiproducto();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $api->getById($id);
} else {
    $api->getAll();
}
