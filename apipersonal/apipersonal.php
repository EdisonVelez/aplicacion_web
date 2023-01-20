<?php

include_once 'personal.php';

class apipersonal
{

    function getAll()
    {
        $personal = new personal();
        $personales = array();
        $personales["items"] = array();

        $res = $personal->obtenerpersonal();

        if ($res->rowCount()) {
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $item = array(
                    'id' => $row['id'],
                    'nombres' => $row['nombres'],
                    'apellidos' => $row['apellidos'],
                    'cedula' => $row['cedula'],
                    'telefono' => $row['telefono'],
                    'dirección' => $row['dirección']
                );
                array_push($personales['items'], $item);
            }

            echo json_encode($personales);
        } else {
            echo json_encode(array('mensaje' => 'no hay elementos'));
        }
    }
    function add($item)
    {
        $personal = new personal();

        $res = $personal->nuevopersonal($item);
        $this->exito('nuevo trabajador registrado');
    }

    function exito($mensaje)
    {
        echo json_encode(array('mensaje' => $mensaje));
    }

    function error($mensaje)
    {
        echo json_encode(array('mensaje' => $mensaje));
    }
}
