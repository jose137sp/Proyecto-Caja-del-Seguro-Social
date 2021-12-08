<?php
class Conexion
{
        public static function conectar()
        {
            $conexion = new mysqli('sql103.epizy.com', 'epiz_30546817', 'rj62aAYbhO', 'epiz_30546817_gestion_citas');
            return $conexion;
        }
}
