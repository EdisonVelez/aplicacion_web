<?php
include_once '../BaseData.php';

class producto extends DB
{
    function obtenerproducto()
    {
        $query = $this->connect()->query('SELECT * FROM producto');

        return $query;
    }


    function obtenerproductos($id)
    {
        $query = $this->connect()->prepare('SELECT * FROM producto WHERE id = :id');
        $query->execute(['id' => $id]);
        return $query;
    }
}
