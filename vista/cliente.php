<?php
include("conexion.php") ;
class Cliente extends conexion 
{

	function __construct($idclient,$c_firstname,$c_lastname,$c_dni,$c_phone,$c_email,$c_address){
		$mysqli = new conexion();
		$this->mysqli = $mysqli;
		$this->idclient = $idclient;
		$this->c_firstname = $c_firstname;
		$this->c_lastname = $c_lastname;
		$this->c_dni = $c_dni;
		$this->c_phone = $c_phone;
		$this->c_email = $c_email;
		$this->c_address = $c_address;
	}

	function crear() 
		{
			$consulta = "INSERT INTO client (c_firstname, c_lastname, c_dni, c_phone, c_email, c_address) 
						VALUES ('{$this->c_firstname}','{$this->c_lastname}','{$this->c_dni}', '{$this->c_phone}', '{$this->c_email}', '{$this->c_address}')";
			$registro = $this->mysqli->query($consulta);
			
                        echo $consulta;
                        
                        if (!$registro) {
				echo "no se puedo insertar";
				echo $this->mysqli->connect_errno();
			}elseif($this->mysqli->affected_rows == 0){
				echo "0 numeros de filas afectadas";
				echo $this->mysqli->connect_errno();
			}else{
				header("Location: index.php?pagina=cliente&accion=listar&respuesta=v");
				exit();
			}
		}

	function actualizar()
		{
			$consulta = "UPDATE client SET c_firstname = '{$this->c_firstname}', c_lastname = '{$this->c_lastname}' , c_dni = '{$this->c_dni}', c_phone = '{$this->c_phone}', c_email = '{$this->c_email}', c_address = '{$this->c_address}' WHERE idclient = $this->idclient";
			$registro = $this->mysqli->query($consulta);
			if (!$registro) {
				echo "no se puedo insertar";
				echo $this->mysqli->connect_errno();
			}elseif($this->mysqli->affected_rows == 0){
				echo "0 numeros de filas afectadas";
				echo $this->mysqli->connect_errno();
			}else{
				header("Location: index.php?pagina=cliente&accion=listar&respuesta=v");
				exit();
			}
		}

	function eliminar()
		{
			$consulta = "DELETE FROM client WHERE idclient = $this->idclient LIMIT 1";
			$registro = $this->mysqli->query($consulta);
			if (!$registro) {
				echo "no se puedo insertar";
				echo $this->mysqli->connect_errno();
			}elseif($this->mysqli->affected_rows == 0){
				echo "0 numeros de filas afectadas";
				echo $this->mysqli->connect_errno();
			}else{
				header("Location: index.php?pagina=cliente&accion=listar&respuesta=v");
				exit();
			}
		}

	function obtener()
		{
			$consulta = "SELECT * FROM client ORDER BY c_lastname ASC";
			$noticias = $this->mysqli->query($consulta);
			if (!$noticias) {
				echo "no sale nada";
				$this->mysqli->connect_errno();
			}else{
				$registros = array();
				while ($filas = $noticias->fetch_array()) {
					$registros[] = $filas;
				}
				return $registros;
			}
		}

	function obtener_id()
		{
			$consulta = "SELECT * FROM client WHERE idclient = $this->idclient LIMIT 1";
			$registro = $this->mysqli->query($consulta);
			if (!$registro) {
				echo "no sale nada";
				$registro->connect_errno();
			}else{
				$registros = array();
				while ($filas = $registro->fetch_array()) {
					$registros[] = $filas;
				}
				return $registros;
			}
		}
}

class Tesis extends conexion 
{

	function __construct($idthesis,$title,$description,$cdate,$mdate,$idadvisor,$idclient){
		$mysqli = new conexion();
		$this->mysqli = $mysqli;
		$this->idthesis = $idthesis;
		$this->title = $title;
		$this->description = $description;
		$this->cdate = $cdate;
		$this->mdate = $mdate;
		$this->idadvisor = $idadvisor;
		$this->idclient = $idclient;
	}

	function crear() 
		{
			$consulta = "INSERT INTO thesis (title, description, cdate, mdate, idadvisor, idclient) 
						VALUES ('{$this->title}','{$this->description}','{$this->cdate}', '{$this->mdate}', '{$this->idadvisor}', '{$this->idclient}')";
			$registro = $this->mysqli->query($consulta);
			if (!$registro) {
				echo "no se puedo insertar";
				echo $this->mysqli->connect_errno();
			}elseif($this->mysqli->affected_rows == 0){
				echo "0 numeros de filas afectadas";
				echo $this->mysqli->connect_errno();
			}else{
				header("Location: index.php?pagina=tesis&accion=listar&respuesta=v");
				exit();
			}
		}

	function actualizar()
		{
			$consulta = "UPDATE thesis SET title = '{$this->title}', description = '{$this->description}' , cdate = '{$this->cdate}', mdate = '{$this->mdate}', idadvisor = '{$this->idadvisor}', idclient = '{$this->idclient}' WHERE idthesis = $this->idthesis";
			$registro = $this->mysqli->query($consulta);
			if (!$registro) {
				echo "no se puedo insertar";
				echo $this->mysqli->connect_errno();
			}elseif($this->mysqli->affected_rows == 0){
				echo "0 numeros de filas afectadas";
				echo $this->mysqli->connect_errno();
			}else{
				header("Location: index.php?pagina=tesis&accion=listar&respuesta=v");
				exit();
			}
		}

	function eliminar()
		{
			$consulta = "DELETE FROM thesis WHERE idthesis = $this->idthesis LIMIT 1";
			$registro = $this->mysqli->query($consulta);
			if (!$registro) {
				echo "no se puedo insertar";
				echo $this->mysqli->connect_errno();
			}elseif($this->mysqli->affected_rows == 0){
				echo "0 numeros de filas afectadas";
				echo $this->mysqli->connect_errno();
			}else{
				header("Location: index.php?pagina=tesis&accion=listar&respuesta=v");
				exit();
			}
		}

	function obtener()
		{
			$consulta = "SELECT * FROM thesis ORDER BY title ASC";
			$noticias = $this->mysqli->query($consulta);
			if (!$noticias) {
				echo "no sale nada";
				$this->mysqli->connect_errno();
			}else{
				$registros = array();
				while ($filas = $noticias->fetch_array()) {
					$registros[] = $filas;
				}
				return $registros;
			}
		}

	function obtener_id()
		{
			$consulta = "SELECT * FROM thesis WHERE idthesis = $this->idthesis LIMIT 1";
			$registro = $this->mysqli->query($consulta);
			if (!$registro) {
				echo "no sale nada";
				$registro->connect_errno();
			}else{
				$registros = array();
				while ($filas = $registro->fetch_array()) {
					$registros[] = $filas;
				}
				return $registros;
			}
		}
}

class Sesion extends conexion
{
	function __construct($iduser, $username, $password)
	{
		$mysqli = new conexion();
		$this->mysqli = $mysqli;
		$this->iduser = $iduser;
		$this->username = $username;
		$this->password = $password;
	}

	function obtener_usuario()
	{
			
		$consulta = "SELECT * FROM usuario WHERE username = '$this->username' AND password = $this->password LIMIT 1 ";
                echo $consulta;
                //exit();
			$usuario = $this->mysqli->query($consulta);
			if (!$usuario) {
				header("Location: index.php?pagina=sesion&respuesta=f");
				exit();
			}else{
				$registros = array();
				while ($filas = $usuario->fetch_array()) {
					$registros[] = $filas;
				}
				return $registros;
			}
	}

	function cerrar()
	{
		session_start();
		session_unset();
		session_destroy();
	}
}

class Paginacion extends conexion
{
	
	function __construct($table, $offset, $limit)
	{
		$mysqli = new conexion();
		$this->mysqli = $mysqli;
		$this->table = $table;
		$this->offset = $offset;
		$this->limit = $limit;
	}

	function obtener()
	{
 		$consulta = "SELECT * FROM $this->table LIMIT $this->offset, $this->limit";
			$noticias = $this->mysqli->query($consulta);
			if (!$noticias) {
				echo "no sale nada";
				$this->mysqli->connect_error();
			}else{
				$registros = array();
				while ($filas = $noticias->fetch_array()) {
					$registros[] = $filas;
				}
				return $registros;
			}
	}

	function obtener_total_pagina()
	{
 		$consulta = "SELECT * FROM $this->table";
			$noticias = $this->mysqli->query($consulta);
			$numeros = $noticias->num_rows;
			if (!$numeros) {
				echo "no sale nada";
				$this->mysqli->connect_error();
			}else{

				return $numeros;
			}
	}
}

?>