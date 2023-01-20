<?php

include_once 'producto.php';

class apiproducto
{

    function getAll()
    {
        $producto = new producto();
        $productos = array();
        $productos["items"] = array();

        $res = $producto->obtenerproducto();

        if ($res->rowCount()) {
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $item = array(
                    'id' => $row['id'],
                    'nombre' => $row['nombre'],
                    'código' => $row['código'],
                    'descripción' => $row['descripción'],
                    'foto' => $row['foto']
                );
                array_push($productos['items'], $item);
            }

            echo json_encode($productos);
        } else {
            echo json_encode(array('mensaje' => 'no hay elementos'));
        }
    }

    function getById($id)
    {
        $producto = new producto();
        $productos = array();
        $productos["items"] = array();

        $res = $producto->obtenerproductos($id);

        if ($res->rowCount()) {
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $item = array(
                    'id' => $row['id'],
                    'nombre' => $row['nombre'],
                    'código' => $row['código'],
                    'descripción' => $row['descripción'],
                    'foto' => $row['foto']
                );
                array_push($productos['items'], $item);
            }

            echo json_encode($productos);
        } else {
            echo json_encode(array('mensaje' => 'no hay elementos'));
        }
    }
}
