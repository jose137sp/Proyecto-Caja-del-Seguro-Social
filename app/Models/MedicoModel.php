<?php

use PharIo\Manifest\Requirement;

class MedicoModel
{
    private $medicos;
    private $db;

    public function verificarlogin($cedula_paciente)
    {
        //Punteros que permiten verificar la existencia de información en la BDD
        $consulta = $this->db->query("SELECT count(*) as contador from paciente where cedula = '" . $cedula_paciente . "';");
        $cantidad_pacientes = $consulta->fetch_assoc();
        if ($cantidad_pacientes['contador'] > 0) {
            return true;
        } else {
            return false;
        }
    }

}