<?php

use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
require_once('Models/PacienteModel.php');

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

    //Esta función permite registrar un paciente siguiendo las reglas de modelo de negocio
    public function guardar(){

            //Variables para la protección contra errores
            $nombre_error ="";

            //Se guardan los datos registrados en POST a las variables correspondientes
            $nombres=$_POST['nombres'];
            $apellidos=$_POST['apellidos'];
            $cedula=$_POST['cedula'];
            $fechanac=$_POST['fechanac'];
            $tipo_sangre=$_POST['tipo_sangre'];
            $direccion=$_POST['direccion'];  
        
        //Para cada variable, debe verificar que el campo no esté vacío y cumpla las reglas establecidas.
        if(empty(trim($_POST['nombres']))){
            $nombre_error = "El campo nombre no puede estar vacío."; 
        }    elseif(!preg_match('/^[a-zA-Z]+$/', trim($_POST["nombres"]))){
            $nombre_error = "El nombre solo admite letras.";
        } else{
            $nombres = trim($_POST["nombre"]);
        }

        if(empty($nombre_error) && !empty($apellidos) && !empty($cedula) && !empty($fechanac) && !empty($tipo_sangre) && !empty($direccion)){
            $paciente= new PacienteModel();
            $existe_paciente = $paciente->verificarPaciente($cedula);

                if(!$existe_paciente){

                    if($paciente->registrarPaciente($nombres,$apellidos,$cedula,$fechanac,$tipo_sangre,$direccion)){
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

    public function cita_nueva(){
        require_once('Views/Paciente/cita-nueva.php');
    }

    public function cita_control(){
        require_once('Views/Paciente/cita-control.php');
    }

    public function consultar_cita(){
        require_once('Views/Paciente/consultar-estado.php');
    }

    public function ayuda(){
        require_once('Views/Layouts/ayuda.php');
    }

}

?>