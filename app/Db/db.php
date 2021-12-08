<?php
class Conexion
{
        public static function conectar()
        {
            $conexion = new mysqli('127.0.0.1', 'root', '', 'gestion_citas');
            return $conexion;
        }
}
