<?php
include_once '../BaseData.php';

class personal extends DB
{
    function obtenerpersonal()
    {
        $query = $this->connect()->query('SELECT * FROM personal');

        return $query;
    }

    function nuevopersonal($personal)
    {
        $query = $this->connect()->prepare('INSERT INTO personal (nombres, apellidos, cedula, telefono, dirección) VALUES 
        (:nombre, :apellidos, :cedula, :telefono, :dirección)');
        $query->execute([
            'nombres' => $personal['nombre'], 'apellidos' => $personal['apellidos'], 'cedula' => $personal['cedula'],
            'telefono' => $personal['telefono'], 'dirección' => $personal['dirección']
        ]);

        return $query;
    }
}
