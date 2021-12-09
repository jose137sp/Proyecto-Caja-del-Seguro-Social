<?php

require_once('Models/MedicoModel.php');
require_once('Models/PacienteModel.php');
class MedicoController
{
    function __construct()
    {
        
    }

    function login()
    {   
        require_once('Views/Medico/medico-login.php');
    }

    public function verificar()
    {   
        $cedula=$_POST['cedula'];
        $contraseña=$_POST['contraseña'];
        if(!empty($cedula) && !empty($contraseña)){
            $medico= new MedicoModel();
            $existe_paciente = $medico->verificarlogin($cedula, $contraseña);
    }

    function cita_control()
    {
        require_once('Views/Medico/medico-cita-control.php');
    }

    function datos_paciente()
    {

        // El breadcrumb cambia en cda página. OJO CON ESTO. -->
        /**
        Codigo para verificar existencia de paciente
        $data['cedula']=$_POST['cedula'];
		$data['fecha_nac']=$_POST['fecha_nac'];
		$data['num_cita']=$_POST['num_cita'];

			if(!empty($data['cedula']) && !empty($data['fechanac']) && !empty($data['num_cita'])){
			$paciente= new PacienteModel();
			$existe_paciente = $paciente->verificarpaciente($data['cedula']);
			    if(!$existe_paciente){
                    if($cliente->registrarCliente($data)){
					    $this->datos_cita();
                }else{

                    //codigo de error
                    $this->error()
                }
         */
            //Si el paciente existe entonces    
        require_once('Views/Medico/medico-cita-control-busqueda.php');
    }

    function datos_cita(){
        require_once('Views/Medico/medico-cita-control-datos.php');
    }

    function cita_enviada(){

        /**
         * Codigo para verificar los datos de la cita
         */

        require_once('Views/Medico/medico-cita-enviada.php');

    }

     function ayuda(){
        require_once('Views/Medico/medico-ayuda.php');
    }
}
}