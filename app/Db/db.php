<?php

class Conexion
{
    public static function conectar()
    {
        $conexion = mysqli_connect('localhost', 'root', '', 'gestion_citas');
        return $conexion;
    }
}
