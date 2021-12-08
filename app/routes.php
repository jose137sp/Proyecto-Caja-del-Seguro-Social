<?php

$controllers = array(
    'Paciente'=>[ 'index', 'ayuda', 'cita_control', 'cita_nueva', 'consultar_cita', 'registrarse','guardar', 'confirmar', 'error'],
    'Medico' => ['login', 'index', 'medico_login', 'cita_control', 'cita-nueva', 'confirmar', 'error', 'itinerario', 'datos_cita']
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])){
        call($controller, $action);
    } else {
        call('Paciente', 'index');
    }
} else {
    call('Paciente', 'index');
}

function call($controller, $action)
{
    require_once('Controllers/' . $controller . 'Controller.php');

    switch ($controller) {
        case 'Paciente':
            $controller = new PacienteController();
            break;
        case 'Medico':
            $controller = new MedicoController();
            break;
        default:
            break;
    }

    $controller->{$action}();
}

?>