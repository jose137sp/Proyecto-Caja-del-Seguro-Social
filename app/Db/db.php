<?php

class Conexion
{
    public static function conectar()
    {
        $conexion = new mysqli('localhost', 'root', '', 'gestion_citas');
        return $conexion;
    }
}
