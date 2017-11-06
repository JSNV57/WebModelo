<?php
include("constantes.php");
class Conexion extends mysqli
{
	public function __construct(){
		parent::__construct(HOSTNAME,USERNAME,PASSWORD,DATABASE);
		$this->query("SET NAME 'utf8';");
		$this->connect_errno ? die('Error con la conexion') : $todo="bien" ;
	}
}

?>

