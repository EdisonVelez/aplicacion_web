<?php
include_once '../BaseData.php';

class mensaje extends DB
{
    function obtenermensaje()
    {
        $query = $this->connect()->query('SELECT * FROM mensajes');

        return $query;
    }
}
