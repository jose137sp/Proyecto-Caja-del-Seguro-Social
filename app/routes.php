<?php

$controllers = array(
    'Paciente'=>[ 'index', 'ayuda', 'cita_nueva', 'cita_nueva_solicitada', 'cita_nueva_registrada', 'consultar_cita', 'cita_consultada', 'cita_cancelada', 'registrarse', 'guardar', 'confirmar', 'error', 'cancelar'],
    'Medico'=>['login', 'verificar', 'index', 'cita_medica','consultar_dia', 'medico_login', 'confirmar', 'error', 'info_cita_medica', 'reprogramar_cita', 'itinerario', 'datos_paciente', 'datos_cita', 'ayuda', 'cancelar_cita_medico', 'cita_cancelada']
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