<?php
//Nuestra logica de negocio
include('vista/controller.php');
//zona horaria bogota
date_default_timezone_set('America/Lima');
$pagina = new App_controllers();
switch ($_GET['pagina']) {
	case 'asesor':
		//CODIGO QUE SE EJECUTARA COMO ASESOR
		break;
	case 'cliente':
		//CODIGO QUE SE EJECUTARA COMO CLIENTE
		switch ($_GET['accion']) 
                          {
				case 'nuevo':
					$pagina->nuevo_cliente();
					break;
				case 'crear':
					$pagina->crear_cliente();
					break;
				case 'editar':
					$pagina->editar_cliente();
					break;
				case 'actualizar':
					$pagina->actualizar_cliente();
					break;
				case 'eliminar':
					$pagina->eliminar_cliente();
					break;
				default:
					$pagina->reporte_cliente();
					break;
			}
		break;
	case 'archivo':
		//CODIGO QUE SE EJECUTARA COMO ARCHIVO
		break;
	case 'tesis':
		//CODIGO QUE SE EJECUTARA PARA MANEJO DE TESIS
		break;
	case 'usuario':
		//CODIGO QUE SE EJECUTARA PARA MANEJO DE USUARIO
		break;
	case 'sesion':
		//CODIGO QUE SE EJECUTARA PARA MANEJO DE SESIONES
        switch ($_GET['accion']) {
        	case 'iniciar':
        		$pagina->start_session();
        		break;
        	case 'cerrar':
        		$pagina->close_session();
        		break;
        	default:
        		$pagina->login();
        		break;
        }
		break;
	case 'panel_control':
		$pagina->panel_control();
		//Panel de control
		break;
	default:
		$pagina->index();
		//Pagina Principal
		break;
}
?>