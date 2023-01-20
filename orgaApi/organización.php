<?php
include_once '../BaseData.php';

class organización extends DB
{
    function obtenerorganización()
    {
        $query = $this->connect()->query('SELECT * FROM organización');

        return $query;
    }
}
