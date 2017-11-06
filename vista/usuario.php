<?php
include("conexion.php") ;
class Usuario 
{
        var $iduser;
	var $username;
	var $password;
	var $dni;
	var $kind;
        var $mysqli;

	function __construct($iduser,$username,$password,$dni,$kind){
		$mysqli = new conexion();
                $this->iduser = $iduser;
		$this->mysqli = $mysqli;
		$this->username = $username;
		$this->password = $password;
		$this->dni = $dni;
		$this->kind = $kind;                
	}

	function crear() 
		{

                $consulta = "INSERT INTO usuario (username,password,dni,kind) 
		VALUES ('{$this->username}','{$this->password}','{$this->dni}','{$this->kind}')";
 		echo $consulta;
                $registro = $this->mysqli->query($consulta);
		}

        
        function actualizar()
	{
		$consulta = "UPDATE usuario SET username = '{$this->username}', password = '{$this->password}' ,;"
                . " dni = '{$this->dni}',kind = '{$this->kind}' WHERE iduser = $this->iduser";
		$registro = $this->mysqli->query($consulta);
		if (!$registro) {
			echo "no se puedo insertar";
			echo $this->mysqli->connect_errno();
		}elseif($this->mysqli->affected_rows == 0){
			echo "0 numeros de filas afectadas";
			echo $this->mysqli->connect_errno();
		}else{
			echo ("deberemos volver a la pagina principal");
                    }
	}

	function eliminar()
		{
			$consulta = "DELETE FROM usuario WHERE iduser = $this->iduser LIMIT 1";
                        echo $consulta;
			$registro = $this->mysqli->query($consulta);
			if (!$registro) {
				echo "no se puedo eliminar";
				echo $this->mysqli->connect_errno();
			}elseif($this->mysqli->affected_rows == 0){
				echo "0 numeros de filas afectadas";
				echo $this->mysqli->connect_errno();
			}else{
                            echo ("deberemos volver a la pagina principal");
			}
		}

	function obtener()
		{
			$consulta = "SELECT * FROM usuario ORDER BY username ASC";
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
			$consulta = "SELECT * FROM usuario WHERE iduser = $this->iduser LIMIT 1";
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

?>
