<?php

include_once 'mensajes.php';

class apimensaje
{

    function getAll()
    {
        $mensaje = new mensaje();
        $mensajes = array();
        $mensajes["items"] = array();

        $res = $mensaje->obtenermensaje();

        if ($res->rowCount()) {
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $item = array(
                    'id' => $row['id'],
                    'correo' => $row['correo'],
                    'nombre remitente' => $row['nombre_R'],
                    'telefono' => $row['teléfono'],
                    'asunto' => $row['asunto'],
                    'cuerpo mensaje' => $row['cuerpo_M']
                );
                array_push($mensajes['items'], $item);
            }

            echo json_encode($mensajes);
        } else {
            echo json_encode(array('mensaje' => 'no hay elementos'));
        }
    }
}
