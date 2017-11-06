<?php
//modelo o la data que se manipulara proximamente
include('cliente.php');
class App_controllers
{
	function __construct()
	{
		date_default_timezone_set('America/Lima');
	}
	function index()
	{
		include('vista/index_frontend.php');
	}

	function panel_control()
	{	
		include('vista/backend_session.php');
		include('vista/backend_dashboard.php');
	}
       // --------------------------  FUNCIONES DE CONTROL PARA CLIENTES -----------------------------------
	// funcion que muestra un formulario de nuevo cliente
	function nuevo_cliente()
	{       
		include('vista/backend_session.php');
		include('vista/backend_new_clientform.php');
	}
	function crear_cliente()
	{
		include('vista/backend_session.php');
		$firstname = htmlentities($_POST['firstname'],ENT_QUOTES,"UTF-8");
		$lastname = htmlentities($_POST['lastname'],ENT_QUOTES,"UTF-8");
		$dni = $_POST['dni'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = htmlentities($_POST['address'],ENT_QUOTES,"UTF-8");
		$clase = new Cliente($idclient,$firstname,$lastname,$dni,$phone,$email,$address);
		$clase->crear();
	}
	function editar_cliente()
	{
		include('vista/backend_session.php');
		$idclient = $_GET['id'];
		$clase = new Cliente($idclient,$firstname,$lastname,$dni,$phone,$email,$address);
		$filas = $clase->obtener_id();
		include('backend_edit_clientform.php');
	}
	function actualizar_cliente()
	{
		include('vista/backend_session.php');
		$idclient = $_POST['id'];
		$firstname = htmlentities($_POST['firstname'],ENT_QUOTES,"UTF-8");
		$lastname = htmlentities($_POST['lastname'],ENT_QUOTES,"UTF-8");
		$dni = $_POST['dni'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = htmlentities($_POST['address'],ENT_QUOTES,"UTF-8");
		$clase = new Cliente($idclient,$firstname,$lastname,$dni,$phone,$email,$address);
		$clase->actualizar();
	}
	function eliminar_cliente()
	{
		include('vista/backend_session.php');
		$idclient = $_GET['id'];
		$clase = new Cliente($idclient,$firstname,$lastname,$dni,$phone,$email,$address);
		$clase->eliminar();
	}
	function reporte_cliente()
	{
		include('vista/backend_session.php');
		$limit = 15;
		$page = (int) $_GET["numero"];
		  if ($page < 1)
		  {
		    $page = 1;
		  }
		$offset = ($page - 1) * $limit;
		$table = "client";
		$clase = new Paginacion($table, $offset, $limit);
		$filas = $clase->obtener();
		$total = $clase->obtener_total_pagina();
		$totalpage = ceil($total/$limit);
		$clase = new Cliente($idclient,$firstname,$lastname,$dni,$phone,$email,$address);
		$filas = $clase->obtener();
		include('backend_report_client.php');
	}
	function login()
	{
		include('backend_loginform.php');
	}
	// funcion que comprueba datos enviados por el formulario de inicio de sesion
	function start_session()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
                echo $username.$password;
		$clase = new Sesion($iduser, $username, $password);
		$filas = $clase->obtener_usuario();
		if (!empty($filas)) {
			foreach ($filas as $campo) {
				session_start();
				$_SESSION["iduser"] = $campo[0];
				$_SESSION["username"] = $campo[1];
				$_SESSION["password"] = $campo[2];
				$_SESSION["kind"] = $campo[5];
			}

			header('Location: index.php?pagina=panel_control');
			exit();
		}else{
			header('Location: index.php?pagina=sesion&respuesta=f');
			exit();	
		}
	}
	// funcion para cerrar sesion iniciada, te manda para el formulario de inicio de sesion
	function close_session()
	{
		session_start();
		session_unset();
		session_destroy();
		header('Location: index.php?pagina=sesion');
		exit();
	}
}
?>