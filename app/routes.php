<?php

$controllers = array(
    'Paciente'=>[ 'index', 'ayuda', 'cita_control', 'cita_nueva', 'cita_consultada', 'cita_nueva_solicitada', 'cita_nueva_registrada','cita_nueva_busqueda', 'consultar_cita', 'registrarse', 'guardar', 'confirmar', 'error'],
    'Medico'=>['login', 'verificar', 'index', 'medico_login', 'cita_control', 'confirmar', 'error', 'itinerario', 'datos_paciente', 'datos_cita', 'cita_enviada', 'ayuda', 'servicio']
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