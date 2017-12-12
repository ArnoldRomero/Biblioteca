<?php
include_once('clsConexion.php');
class Foto extends Conexion
{
	private $cod_user;
	private $foto;
	private $portada;

	public function Foto(){
		parent::Conexion();
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
		$sql="insert into fotos (id) values ('$usuario')";
		parent::ejecutar($sql);
	}

	public function InsertarF($user,$foto){
		$sql="update fotos set foto='$foto' where id='$user'";
		parent::ejecutar($sql);
	}
	public function InsertarP($user,$portada){
		$sql="update fotos set portada='$portada' where id='$user'";
		parent::ejecutar($sql);
	}

	public function ObtenerFoto($user){	
		$sql="SELECT foto from fotos where id='$user' ";
		$dato=parent::ejecutar($sql);
		$fila=mysqli_fetch_object($dato);
		return $fila->foto;
	}
	public function ObtenerPortada($user){
		$sql="SELECT portada from fotos where id='$user' ";
		$dato=parent::ejecutar($sql);
		$fila=mysqli_fetch_object($dato);
		return $fila->portada;
	}

	
}
?>