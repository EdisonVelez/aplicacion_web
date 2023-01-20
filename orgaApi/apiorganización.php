<?php

include_once 'organización.php';

class apiorganización
{

    function getAll()
    {
        $organización = new organización();
        $organizacion = array();
        $organizacion["items"] = array();

        $res = $organización->obtenerorganización();

        if ($res->rowCount()) {
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $item = array(
                    'id' => $row['id'],
                    'nombre' => $row['nombre'],
                    'foto' => $row['foto'],
                    'descripción' => $row['descripción'],
                    'misión' => $row['misión'],
                    'visión' => $row['visión'],
                    'valores' => $row['valores']
                );
                array_push($organizacion['items'], $item);
            }

            echo json_encode($organizacion);
        } else {
            echo json_encode(array('mensaje' => 'no hay elementos'));
        }
    }
}
