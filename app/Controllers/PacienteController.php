<?php

use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class PacienteController
{
    function __construct()
    {

    }

    function index()
    {
        require_once('Views/Layouts/bienvenida.php');
    }

    function registrarse(){
        require_once('Views/Paciente/registrar-usuario.php');
    }

    public function guardar(){
        $data['Nombres']=$_POST['Nombres'];
        $data['Apellidos']=$_POST['Apellidos'];
        $data['Cedula']=$_POST['Cedula'];
        $data['FechaNac']=$_POST['FechaNac'];
        $data['Tipo_Sangre']=$_POST['Tipo_Sangre'];
        $data['Direccion']=$_POST['Direccion'];

        if(!empty($data['Nombres']) && !empty($data['Apellidos']) && !empty($Data['Cedula'])){
            $paciente= new PacienteModel();
            $existe_paciente = $paciente->verificarPaciente($data['Cedula']);

            if(!$existe_paciente){
                
                if($paciente->registrarPaciente($data)){
                    $this->confirmar();

                }else{
                $this->error();
            } 

            }else{
            $this->error();
            } 

        }else{
            $this->error();
        }
    }

    public function confirmar(){
        require_once('Views/Paciente/confirmar.php');
    }

    public function error(){
        require_once('Views/Paciente/error.php');
    }

    public function ayuda(){
        require_once('Views/Layouts/ayuda.php');
    }

}

?>