<?php
include_once('clsConexion.php');
class Foto extends Conexion
{
	private $cod_user;
	private $foto;
	private $portada;

	public function Foto(){
		$this->cod_user=0;
		$this->foto="";
		$this->portada="";
	}
	public function setUser($dato){
		$this->cod_user=$dato;
	}
	public function setFoto($dato){
		$this->foto=$dato;
	}
	public function setPortada($dato){
		$this->portada=$dato;
	}

	public function Guardar($usuario){
		$sql="insert into fotos (id) value ('$usuario')"
	}
}
?>